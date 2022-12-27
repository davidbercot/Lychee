<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\JsonResource;
use App\Http\Resources\Rights\AlbumRightsResource;
use App\Models\TagAlbum;

class TagAlbumResource extends JsonResource
{
	public function __construct(
		private TagAlbum $tagAlbum
	) {
		parent::__construct();
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
			'id' => $this->tagAlbum->id,
			'title' => $this->tagAlbum->title,
			'owner_name' => $this->tagAlbum->owner->name,
			'is_tag_album' => true,

			// attributes
			'description' => $this->tagAlbum->description,
			'show_tags' => $this->tagAlbum->show_tags,

			// children
			'photos' => PhotoResource::collection($this->whenRelationshipIsLoaded($this->tagAlbum, 'photos')),

			// thumb
			'thumb' => $this->tagAlbum->thumb,

			// timestamps
			'created_at' => $this->tagAlbum->created_at,
			'updated_at' => $this->tagAlbum->updated_at,
			'max_taken_at' => $this->tagAlbum->min_taken_at,
			'min_taken_at' => $this->tagAlbum->max_taken_at,

			// security
			'policy' => $this->tagAlbum->policy,
			'rights' => AlbumRightsResource::ofAlbum($this->tagAlbum)->toArray($request),
		];
	}
}
