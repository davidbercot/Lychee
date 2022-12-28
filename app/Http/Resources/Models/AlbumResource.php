<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\Rights\AlbumRightsResource;
use App\Http\Resources\Traits\WithStatus;
use App\Models\Album;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Basic album conversion when using get().
 */
class AlbumResource extends JsonResource
{
	use WithStatus;

	public function __construct(Album $album)
	{
		parent::__construct($album);
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
			'owner_name' => $this->resource->owner->name,

			// attributes
			'description' => $this->resource->description,
			'track_url' => $this->resource->track_url,
			'license' => $this->resource->license,
			'sorting' => $this->resource->sorting,

			// children
			'parent_id' => $this->resource->parent_id,
			'has_albums' => !$this->resource->isLeaf(),
			'albums' => AlbumResource::collection($this->whenLoaded('children')),
			'photos' => PhotoResource::collection($this->whenLoaded('photos')),

			// thumb
			'cover_id' => $this->resource->cover_id,
			'thumb' => $this->resource->thumb,

			// timestamps
			'created_at' => $this->resource->created_at,
			'updated_at' => $this->resource->updated_at,
			'max_taken_at' => $this->resource->min_taken_at,
			'min_taken_at' => $this->resource->max_taken_at,

			// security
			'policy' => $this->resource->policy,
			'rights' => AlbumRightsResource::make($this->resource)->toArray($request),
		];
	}
}
