<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\JsonResource;
use Illuminate\Support\Collection;

class TopAlbumsResource extends JsonResource
{
	public function __construct(
		public Collection $smart_albums,
		public Collection $tag_albums,
		public Collection $albums,
		public ?Collection $shared_albums = null
	) {
		parent::__construct();

		$this->shared_albums ??= new Collection();
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
			'smart_albums' => SmartAlbumResource::collection($this->smart_albums),
			'tag_albums' => TagAlbumResource::collection($this->tag_albums),
			'albums' => AlbumResource::collection($this->albums),
			'shared_albums' => AlbumResource::collection($this->shared_albums),
		];
	}
}