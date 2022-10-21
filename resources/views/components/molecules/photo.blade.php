<div wire:click="$emit('openPhoto', '{{ $photo_id }}')"
	style="--w: {{ $_w }};--h: {{ $_h }}"
	class='photo' {{-- ${disabled ? `disabled` : ``}'--}}
	data-album-id='{{ $album_id }}'
	data-id='{{ $photo_id }}'
	data-tabindex='{{ Helpers::data_index() }}'
	>
	@include('components.atoms.photo.thumb')
	<div class='overlay'>
		<h1 title='{{ $title }}'>{{ $title }}</h1>
		@if($taken_at !== "")
			<a><span title='Camera Date'><x-icons.iconic icon='camera-slr' /></span>{{ $taken_at }}</a>
		@else
			<a>{{ $created_at }}</a>
		@endif
	</div>
	@if (Auth::check())
		<div class='badges'>
			@if($is_starred)
			<x-icons.icon class='badge--star icn-star' icon='star' />
			@endif
			@if($is_public)
			<x-icons.icon class='badge--visible badge--hidden icn-share' icon='eye' />
			@endif
		</div>
	@endif
</div>