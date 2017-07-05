@extends('layouts.app')

@section('css')

<link href="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="container">

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-3">
		<h1>Dogs</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-9">
			<form action=" ">
			@foreach($dog as $value)
				<a href="{{ URL::to('/talents/profile/'.$value->id) }}" ><img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}"></a>
			@endforeach
			</form>
	</div>
</div> 

</div>


@endsection

