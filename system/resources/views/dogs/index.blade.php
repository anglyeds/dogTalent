@extends('layouts.app')

@section('css')

<link href="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="body-content row">
	<div class="col-md-2 text-left">
		<h1>Dogs</h1>
		<h5 id="click">find dogs by name</h5>
		<div id="filter-list" >
			
			@foreach($dog as $value)
				<ul>
					<a href="{{ URL::to('/dogs/profile/'.$value->id) }}"><li style="list-style:none">{{ $value->name }}</li></a>
				</ul>
			@endforeach
			
		</div>
	</div>

	<div class="col-md-10" style="max-width:720px;max-height: 500px;overflow-y:scroll">
		@foreach($dog as $value)
			<a href="{{ URL::to('/dogs/profile/'.$value->id) }}" ><img class="img-responsive image-box" src="{{ URL::asset('/storage/'. $value->image) }}"></a>
		@endforeach
	</div>

</div>
@endsection

@section('js')

	<script type="text/javascript">
		$(function(){
			$('#filter-list').hide();
			$("#click").click(function(){
				if($(this).next('#filter-list').is(':visible') === true){
					$(this).next('#filter-list').slideUp("slow",function(){

					});
				} else {
					$(this).next('#filter-list').slideDown("slow",function(){

					});
				}
		/*		$('#filter-list').slideDown("slow", function(){

				})*/
			})
			
		})
	</script>

@endsection