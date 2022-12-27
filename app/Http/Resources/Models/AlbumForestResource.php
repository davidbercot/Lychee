<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\JsonResource;
use Illuminate\Support\Collection;

class AlbumForestResource extends JsonResource
{
	public function __construct(
		private Collection $albums,
		private ?Collection $sharedAlbums = null
	) {
		parent::__construct();

		$this->albums = $albums;
		$this->sharedAlbums = $sharedAlbums ?? new Collection();
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
			'albums' => AlbumTreeResource::collection($this->albums),
			'shared_albums' => AlbumTreeResource::collection($this->sharedAlbums),
		];
	}
}