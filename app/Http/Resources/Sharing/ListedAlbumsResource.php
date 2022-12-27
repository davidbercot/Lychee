<?php

namespace App\Http\Resources\Sharing;

use App\Actions\Sharing\ListedAlbum;
use App\Http\Resources\JsonResource;

class ListedAlbumsResource extends JsonResource
{
	/**
	 * @param ListedAlbum $albumListed
	 *
	 * @return void
	 */
	public function __construct(public object $albumListed)
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
			'id' => $this->albumListed->id,
			'title' => $this->albumListed->title,
		];
	}
}
