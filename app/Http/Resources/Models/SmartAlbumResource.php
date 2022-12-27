<?php

namespace App\Http\Resources\Models;

use App\DTO\AlbumProtectionPolicy;
use App\Http\Resources\JsonResource;
use App\Http\Resources\Rights\AlbumRightsResource;
use App\SmartAlbums\BaseSmartAlbum;

class SmartAlbumResource extends JsonResource
{
	public function __construct(
		private BaseSmartAlbum $smartAlbum
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
			'id' => $this->smartAlbum->id,
			'title' => $this->smartAlbum->title,

			// children
			'photos' => $this->whenRelationshipIsLoaded($this->smartAlbum, 'photos', PhotoResource::collection($this->smartAlbum->photos), null),

			// thumb
			'thumb' => $this->smartAlbum->thumb,

			// security
			'policy' => AlbumProtectionPolicy::ofSmartAlbum($this->smartAlbum),
			'rights' => AlbumRightsResource::ofAlbum($this->smartAlbum)->toArray($request),
		];
	}
}
