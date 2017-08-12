@extends('layouts.app')

@section('content')

	<div class="row">
			
		<div class="col-md-12">			
			<div class="col-md-8">
			<h1 class="text-left">{!! $post[0]->title !!}</h1>
			<div class="content text-justify">
				{!! $post[0]->body !!}
				</div>
			</div>
			<div class="col-md-4">
			<img src="{!! URL::asset('/storage/'. $post[0]->image) !!}" class="img-responsive" style="width: 200px; height:350;margin:auto;">
			</div>	
		</div>
	</div>

@endsection