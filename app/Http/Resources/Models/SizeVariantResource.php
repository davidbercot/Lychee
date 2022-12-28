<?php

namespace App\Http\Resources\Models;

use App\Models\SizeVariant;
use Illuminate\Http\Resources\Json\JsonResource;

class SizeVariantResource extends JsonResource
{
	private bool $downgrade = false;

	public function __construct(
		private SizeVariant $sizeVariant,
	) {
		parent::__construct($sizeVariant);
	}

	/**
	 * Set downgrade in flow mode.
	 *
	 * @param bool $downgrade
	 *
	 * @return SizeVariantResource
	 */
	public function setDowngrade(bool $downgrade): self
	{
		$this->downgrade = $downgrade;

		return $this;
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
			'type' => $this->sizeVariant->type,
			'filesize' => $this->sizeVariant->filesize,
			'height' => $this->sizeVariant->height,
			'width' => $this->sizeVariant->width,
			'url' => $this->when(!$this->downgrade, $this->sizeVariant->url),
		];
	}
}
