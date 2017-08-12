@extends('layouts.app')

@section('banner')
          <style type="text/css">
              .navbar{
                margin-bottom: 0 !important;
              }

          </style> 

          <div id="banner">
            <ul class="slideshow">
                  @foreach($banner as $value)
                      <li><a href="{{ $value->url }}"></a><img src="{{ URL::asset('/storage/'.$value->image ) }}" title="{{ $value->name }}" alt="{{ $value->description }}"></li>
                  @endforeach
            </ul>  
          </div>   
          
<script type="text/javascript">
        window.addEventListener('load', function () {
        var slsh = new SlideShow('.slideshow', 
          {
            timeout: 5000,
          }
          );
    });

</script>
@endsection
