<?php

namespace App\Http\Resources\Models;

use App\Enum\SizeVariantType;
use App\Http\Resources\JsonResource;
use App\Http\Resources\Rights\PhotoRightsResource;
use App\Models\Photo;
use App\Policies\PhotoPolicy;
use Illuminate\Support\Facades\Gate;

class PhotoResource extends JsonResource
{
	public function __construct(
		private Photo $photo
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
		$downgrade = !Gate::check(PhotoPolicy::CAN_ACCESS_FULL_PHOTO, [Photo::class, $this->photo]) &&
			!$this->isVideo() &&
			$this->photo->size_variants->hasMedium();

		return [
			'id' => $this->photo->id,
			'album_id' => $this->photo->album_id,
			'altitude' => $this->photo->altitude,
			'aperture' => $this->photo->aperture,
			'checksum' => $this->photo->checksum,
			'created_at' => $this->photo->created_at,
			'description' => $this->photo->description,
			'filesize' => $this->photo->filesize,
			'focal' => $this->photo->focal,
			'img_direction' => null,
			'is_public' => $this->photo->is_public,
			'is_starred' => $this->photo->is_starred,
			'iso' => $this->photo->iso,
			'latitude' => $this->photo->latitude,
			'lens' => $this->photo->lens,
			'license' => $this->photo->license,
			'live_photo_checksum' => $this->photo->live_photo_checksum,
			'live_photo_content_id' => $this->photo->live_photo_content_id,
			'live_photo_url' => $this->photo->live_photo_url,
			'location' => $this->photo->location,
			'longitude' => $this->photo->longitude,
			'make' => $this->photo->make,
			'model' => $this->photo->model,
			'original_checksum' => $this->photo->original_checksum,
			'shutter' => $this->photo->shutter,
			'size_variants' => [
				'medium' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::MEDIUM)),
				'medium2x' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::MEDIUM2X)),
				'original' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::ORIGINAL),
					$downgrade),
				'small' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::SMALL)),
				'small2x' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::SMALL2X)),
				'thumb' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::THUMB)),
				'thumb2x' => SizeVariantResource::make($this->photo->size_variants->getSizeVariant(SizeVariantType::THUMB2X)),
			],
			'tags' => $this->photo->tags,
			'taken_at' => $this->photo->taken_at,
			'taken_at_orig_tz' => $this->photo->taken_at_orig_tz,
			'title' => $this->photo->title,
			'type' => $this->photo->type,
			'updated_at' => $this->photo->updated_at,
			'rights' => PhotoRightsResource::ofPhoto($this->photo)->toArray($request),
		];
	}
}
