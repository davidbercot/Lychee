<?php

namespace App\Http\Resources\Rights;

use App\Models\Photo;
use App\Policies\PhotoPolicy;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Gate;

class PhotoRightsResource extends JsonResource
{
	public bool $can_edit;
	public bool $can_download;
	public bool $can_access_full_photo;

	/**
	 * Given a photo, returns the access rights associated to it.
	 *
	 * @param Photo $photo
	 *
	 * @return void
	 */
	public function __construct(Photo $photo)
	{
		parent::__construct(null);
		$this->can_edit = Gate::check(PhotoPolicy::CAN_EDIT, [Photo::class, $photo]);
		$this->can_download = Gate::check(PhotoPolicy::CAN_DOWNLOAD, [Photo::class, $photo]);
		$this->can_access_full_photo = Gate::check(PhotoPolicy::CAN_ACCESS_FULL_PHOTO, [Photo::class, $photo]);
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
			'can_edit' => $this->can_edit,
			'can_download' => $this->can_download,
			'can_access_full_photo' => $this->can_access_full_photo,
		];
	}
}