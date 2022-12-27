<?php

namespace App\Http\Livewire;

use App\Actions\Albums\Top;
use App\Contracts\Exceptions\InternalLycheeException;
use App\Http\Resources\Models\TopAlbumsResource;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Albums extends Component
{
	private TopAlbumsResource $topAlbums;

	/**
	 * Initialize component.
	 *
	 * @param Top $top
	 *
	 * @throws InternalLycheeException
	 */
	public function mount(
		Top $top,
	) {
		$this->topAlbums = $top->get();
	}

	/**
	 * Render component.
	 *
	 * @throws BindingResolutionException
	 */
	public function render()
	{
		return view('livewire.albums');
	}
}
