<?php

namespace App\Http\Resources\Sharing;

use App\Http\Resources\JsonResource;
use Illuminate\Support\Collection;

class SharesResource extends JsonResource
{
	public function __construct(
		public Collection $shared,
		public Collection $albums,
		public Collection $users)
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
			'shared' => SharedAlbumResource::collection($this->shared),
			'albums' => ListedAlbumsResource::collection($this->albums),
			'users' => UserSharedResource::collection($this->users),
		];
	}
}
