<?php

namespace App\Http\Resources\Models;

use App\Models\Album;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumTreeResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		/** @var Album $album */
		$album = $this->resource;

		return [
			// basic
			'id' => $album->id,
			'title' => $album->title,
			'parent_id' => $album->parent_id,
			'albums' => AlbumTreeResource::collection($this->whenLoaded('children')),
		];
	}
}