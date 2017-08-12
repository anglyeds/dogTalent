@extends('layouts.app')

@section('css')

<link href="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.css') }}" rel="stylesheet">

@endsection

@section('content')

	<div class="sidebar">
		<h1>Cats</h1>
	</div>

	<div id="content" style="max-height: 500px;overflow:scroll">
		@foreach($cat as $value)
			<a href="{{ URL::to('/cats/profile/'.$value->id) }}" ><img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}"></a>
		@endforeach
	</div>

@endsection

