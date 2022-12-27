<?php

namespace App\Http\Resources\Models;

use App\Exceptions\Internal\LycheeLogicException;
use App\Http\Resources\JsonResource;
use App\Models\User;

class UserManagementResource extends JsonResource
{
	private ?User $user;

	public function __construct(?User $user, int $status = 200)
	{
		parent::__construct($status);
		$this->user = $user;
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
		if ($this->user === null) {
			throw new LycheeLogicException('Trying to convert a null user into an array.');
		}

		return [
			'id' => $this->user->id,
			'username' => $this->user->username,
			'may_administrate' => $this->user->may_administrate,
			'may_upload' => $this->user->may_upload,
			'may_edit_own_settings' => $this->user->may_edit_own_settings,
		];
	}
}
