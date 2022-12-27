<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\ResourceCollection;
use App\Models\Photo;
use Illuminate\Support\Collection;

class PhotoCollection extends ResourceCollection
{
	/**
	 * @var Collection<Photo>
	 */
	private Collection $photos;

	public function __construct(
		Collection $photos,
		int $status = 200
	) {
		parent::__construct($status);
		$this->photos = $photos;
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
		return $this->photos->map(fn ($p) => PhotoResource::make($p))->map->toArray($request)->all();
	}
}
