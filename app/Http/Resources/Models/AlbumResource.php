<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\JsonResource;
use App\Http\Resources\Rights\AlbumRightsResource;
use App\Models\Album;

class AlbumResource extends JsonResource
{
	private Album $album;

	public function __construct(
		Album $album,
		int $status = 200
	) {
		parent::__construct($status);
		$this->album = $album;
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
			'id' => $this->album->id,
			'title' => $this->album->title,
			'owner_name' => $this->album->owner->name,

			// attributes
			'description' => $this->album->description,
			'track_url' => $this->album->track_url,
			'license' => $this->album->license,
			'sorting' => $this->album->sorting,

			// children
			'parent_id' => $this->album->parent_id,
			'has_albums' => !$this->album->isLeaf(),
			'albums' => $this->whenRelationshipIsLoaded($this->album, 'children', AlbumResource::collection($this->album->children), null),
			'photos' => $this->whenRelationshipIsLoaded($this->album, 'photos', PhotoResource::collection($this->album->photos), null),

			// thumb
			'cover_id' => $this->album->cover_id,
			'thumb' => $this->album->thumb,

			// timestamps
			'created_at' => $this->album->created_at,
			'updated_at' => $this->album->updated_at,
			'max_taken_at' => $this->album->min_taken_at,
			'min_taken_at' => $this->album->max_taken_at,

			// security
			'policy' => $this->album->policy,
			'rights' => AlbumRightsResource::ofAlbum($this->album)->toArray($request),
		];
	}
}
