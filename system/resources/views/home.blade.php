@extends('layouts.app')

@section('content')
          <style type="text/css">
              .navbar{
                margin-bottom: 0 !important;
              }

          </style>    
          <ul class="slideshow">
                @foreach($banner as $value)
                    <li><a href="{{ $value->url }}"></a><img src="{{ URL::asset('/storage/'.$value->image ) }}" title="{{ $value->name }}" alt="{{ $value->description }}"></li>
                @endforeach
          </ul>  

<script type="text/javascript">
        window.addEventListener('load', function () {
        var slsh = new SlideShow('.slideshow', {timeout: 5000});
    });
</script>
@endsection