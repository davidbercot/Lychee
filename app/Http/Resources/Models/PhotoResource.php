<?php

namespace App\Http\Resources\Models;

use App\Enum\SizeVariantType;
use App\Http\Resources\JsonResource;
use App\Http\Resources\Rights\PhotoRightsResource;
use App\Models\Extensions\SizeVariants;
use App\Models\Photo;
use App\Policies\PhotoPolicy;
use Illuminate\Http\Resources\MissingValue;
use Illuminate\Support\Facades\Gate;

class PhotoResource extends JsonResource
{
	private Photo $photo;

	public function __construct(
		Photo $photo,
		int $status = 200
	) {
		parent::__construct($status);
		$this->photo = $photo;
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
		/** @var SizeVariants|MissingValue $size_variants */
		$size_variants = $this->whenRelationshipIsLoaded($this->photo, 'size_variants');
		if ($size_variants instanceof MissingValue) {
			$size_variants = null;
		}
		$downgrade = !Gate::check(PhotoPolicy::CAN_ACCESS_FULL_PHOTO, [Photo::class, $this->photo]) &&
			!$this->photo->isVideo() &&
			$size_variants?->hasMedium() === true;

		$medium = $size_variants?->getSizeVariant(SizeVariantType::MEDIUM);
		$medium2x = $size_variants?->getSizeVariant(SizeVariantType::MEDIUM2X);
		$original = $size_variants?->getSizeVariant(SizeVariantType::ORIGINAL);
		$small = $size_variants?->getSizeVariant(SizeVariantType::SMALL);
		$small2x = $size_variants?->getSizeVariant(SizeVariantType::SMALL2X);
		$thumb = $size_variants?->getSizeVariant(SizeVariantType::THUMB);
		$thumb2x = $size_variants?->getSizeVariant(SizeVariantType::THUMB2X);

		return [
			'id' => $this->photo->id,
			'album_id' => $this->photo->album_id,
			'altitude' => $this->photo->altitude,
			'aperture' => $this->photo->aperture,
			'checksum' => $this->photo->checksum,
			'created_at' => $this->photo->created_at,
			'description' => $this->photo->description,
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
				'medium' => $medium === null ? null : SizeVariantResource::make($medium)->toArray($request),
				'medium2x' => $medium2x === null ? null : SizeVariantResource::make($medium2x)->toArray($request),
				'original' => $original === null ? null : SizeVariantResource::make($original, $downgrade)->toArray($request),
				'small' => $small === null ? null : SizeVariantResource::make($small)->toArray($request),
				'small2x' => $small2x === null ? null : SizeVariantResource::make($small2x)->toArray($request),
				'thumb' => $thumb === null ? null : SizeVariantResource::make($thumb)->toArray($request),
				'thumb2x' => $thumb2x === null ? null : SizeVariantResource::make($thumb2x)->toArray($request),
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
