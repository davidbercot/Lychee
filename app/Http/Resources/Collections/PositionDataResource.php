<?php

namespace App\Http\Resources\Collections;

use App\Http\Resources\Models\PhotoResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class PositionDataResource extends JsonResource
{
	/**
	 * @param string|null $id        the ID of the album; `null` for root album
	 * @param string|null $title     the title of the album; `null` if untitled
	 * @param Collection  $photos    the collection of photos with position data to be shown on map
	 * @param string|null $track_url the URL of the album's track
	 */
	public function __construct(
		public ?string $id,
		public ?string $title,
		public Collection $photos,
		public ?string $track_url)
	{
		parent::__construct(null);
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
			'id' => $this->id,
			'title' => $this->title,
			'photos' => PhotoResource::collection($this->photos)->toArray($request),
			'track_url' => $this->track_url,
		];
	}
}