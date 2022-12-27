<?php

namespace App\Http\Resources\Sharing;

use App\Actions\Sharing\SharedAlbum;
use App\Http\Resources\JsonResource;

class SharedAlbumResource extends JsonResource
{
	/**
	 * @param SharedAlbum $albumShared
	 *
	 * @return void
	 */
	public function __construct(public object $albumShared)
	{
		parent::__construct();
	}

	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return array
	 */
	public function toArray($request): array
	{
		return [
			'id' => $this->albumShared->id,
			'user_id' => $this->albumShared->user_id,
			'album_id' => $this->albumShared->album_id,
			'username' => $this->albumShared->username,
			'title' => $this->albumShared->title,
		];
	}
}
