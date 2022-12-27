<?php

namespace App\Http\Resources\Sharing;

use App\Actions\Sharing\UserShared;
use App\Http\Resources\JsonResource;

class UserSharedResource extends JsonResource
{
	/**
	 * @param UserShared $user
	 *
	 * @return void
	 */
	public function __construct(public object $user)
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
			'id' => $this->user->id,
			'username' => $this->user->username,
		];
	}
}
