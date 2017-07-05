@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		
		<div class="col-md-12">

			@foreach($post as $value)
			<h1 class="text-center">{{ $value->title }}</h1>
				<img src="{{ URL::asset('/storage/'. $value->image) }}" class="img-responsive" style="width: 512px; height:288px;margin:auto;">
				<div class="content text-center">
				{!! $value->body !!}
				</div>
			@endforeach
		</div>
	</div>
</div>

@endsection