<?php

namespace App\Http\Resources\Models;

use App\DTO\AlbumProtectionPolicy;
use App\Http\Resources\Rights\AlbumRightsResource;
use App\SmartAlbums\BaseSmartAlbum;
use Illuminate\Http\Resources\Json\JsonResource;

class SmartAlbumResource extends JsonResource
{
	public function __construct(BaseSmartAlbum $smartAlbum)
	{
		parent::__construct($smartAlbum);
	}

	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			// basic
			'id' => $this->resource->id,
			'title' => $this->resource->title,

			// children
			'photos' => $this->whenLoaded('photos', PhotoResource::collection($this->resource->photos), null),

			// thumb
			'thumb' => $this->resource->thumb,

			// security
			'policy' => AlbumProtectionPolicy::ofSmartAlbum($this->resource)->toArray(),
			'rights' => AlbumRightsResource::make($this->resource)->toArray($request),
		];
	}
}
