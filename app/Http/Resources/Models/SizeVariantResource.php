<?php

namespace App\Http\Resources\Models;

use App\Http\Resources\JsonResource;
use App\Models\SizeVariant;

class SizeVariantResource extends JsonResource
{
	public function __construct(
		private ?SizeVariant $sizeVariant,
		private bool $downgrade = false,
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
		if ($this->sizeVariant === null) {
			return null;
		}

		return [
			'type' => $this->sizeVariant->type,
			'filesize' => $this->sizeVariant->filesize,
			'height' => $this->sizeVariant->height,
			'width' => $this->sizeVariant->width,
			'url' => $this->when(!$this->withUrl, $this->sizeVariant->url),
		];
	}
}
