<?php

namespace App\Http\Resources;

use App\SmartAlbums\BaseSmartAlbum;
use Illuminate\Container\Container;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource as BaseJsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection as BaseResourceCollection;
use Illuminate\Http\Resources\MissingValue;
use function Safe\json_encode;

class ResourceCollection extends BaseResourceCollection
{
	/**
	 * We define a default constructor so it is no longer needed in other cases.
	 *
	 * @return void
	 */
	public function __construct(
		private int $status = 200
	) {
		parent::__construct(null);
	}

	/**
	 * Resolve the resource to an array.
	 *
	 * @param \Illuminate\Http\Request|null $request
	 *
	 * @return array
	 */
	public function resolve($request = null)
	{
		$request = $request ?? Container::getInstance()->make('request');

		$data = $this->toArrayRecursively($request);

		return $this->filter($data);
	}

	/**
	 * Recursively apply toArray in order to care care of futher BaseJsonResource.
	 *
	 * @param \Illuminate\Http\Request|null $request
	 *
	 * @return array
	 */
	private function toArrayRecursively($request = null): array
	{
		/** @var array|Arrayable|\JsonSerializable $data */
		$data = $this->toArray($request);
		if ($data instanceof Arrayable) {
			$data = $data->toArray();
		} elseif ($data instanceof \JsonSerializable) {
			$data = $data->jsonSerialize();
		}

		// Now that we have transformed the first layer as an array we need to check the subsequent layers
		foreach ($data as $k => $v) {
			if (is_object($v)) {
				if ($v instanceof JsonResource) {
					$data[$k] = $v->toArrayRecursively($request); // Here is the recursivity
				} elseif ($v instanceof BaseJsonResource) {
					$data[$k] = $v->toArray($request);
				} elseif ($v instanceof Arrayable) {
					$data[$k] = $v->toArray();
				} elseif ($v instanceof \BackedEnum) {
					$data[$k] = $v->value;
				}
			}
		}

		return $data;
	}

	/**
	 * Convert the instance into a JSON string.
	 *
	 * The error message is inspired by {@link JsonEncodingException::forModel()}.
	 *
	 * @param int $options
	 *
	 * @return string
	 *
	 * @throws JsonEncodingException
	 */
	public function toJson($options = 0): string
	{
		try {
			// Note, we must not use the option `JSON_THROW_ON_ERROR` here,
			// because this does not clear `json_last_error()` from any
			// previous, stalled error message.
			// But `\Illuminate\Http\JsonResponse::setData()` falsy assumes
			// that this method does so.
			// Hence, we call `json_encode` _without_ specifying
			// `JSON_THROW_ON_ERROR` and then mimic that behaviour.
			$json = json_encode($this->jsonSerialize(), $options);
			if (json_last_error() !== JSON_ERROR_NONE) {
				// @codeCoverageIgnoreStart
				throw new \JsonException(json_last_error_msg(), json_last_error());
				// @codeCoverageIgnoreEnd
			}

			return $json;
		} catch (\JsonException $e) {
			throw new JsonEncodingException('Error encoding DTO [' . get_class($this) . ']', 0, $e);
		}
	}

	/**
	 * Retrieve a relationship if it has been loaded.
	 *
	 * @param string $relationship
	 * @param mixed  $value
	 * @param mixed  $default
	 *
	 * @return MissingValue|mixed
	 */
	protected function whenRelationshipIsLoaded(Model|BaseSmartAlbum $model, string $relationship, mixed $value = null, mixed $default = null): mixed
	{
		if (func_num_args() < 3) {
			$default = new MissingValue();
		}

		if (!$model->relationLoaded($relationship)) {
			return value($default);
		}

		if (func_num_args() === 2) {
			return $model->{$relationship};  // @phpstan-ignore-line
		}

		if ($model->{$relationship} === null) {  // @phpstan-ignore-line
			return null;
		}

		return value($value);
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return JsonResponse
	 */
	public function toResponse($request): JsonResponse
	{
		return parent::toResponse($request)->setStatusCode($this->status);
	}
}
