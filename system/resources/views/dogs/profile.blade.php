@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('ext_lib/blueimp/css/blueimp-gallery.min.css')}}">
@endsection
@section('content')

<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="row">
            <div id="links" class="links">
               <!--  /**
                 *loop your image here
                 **/ -->
                <a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a>
                <a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a>
                <a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a>
                <a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a><a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a><a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a><a href="{{ URL::asset('/storage/'. $dog->image) }}">
                    <img src="{{ URL::asset('/storage/'. $dog->image) }}" width="120px" height="120px" data-gallery>
                </a>
            </div>

            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="row">
            <h4>{{$dog->name}}</h4>
            <small>
                <cite title="{{ $dog->location }}">
                    {{ $dog->location }} 
                    <i class="glyphicon glyphicon-map-marker"></i>
                </cite>
            </small>
            <p>    
                <i class="glyphicon glyphicon-book"></i><span>{{ $dog->description }}</span>
                <br />
                <i class="glyphicon glyphicon-glyphicon glyphicon-star-empty"></i>{{ $dog->type }}
                <br />
                <i class="glyphicon glyphicon-envelope"></i>email@example.com
                <br />
                <i class="glyphicon glyphicon-gift"></i>{{$dog->created_at}}
            </p>
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-primary">
                    Social</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Social</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li class="divider"></li>
                </ul>
                <a href="{{route('contact')}}" class="btn btn-primary" style="margin-left:10px;color:white">
                    Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- <div class="right-col">
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="row">
                <a href="{{ URL::asset('/storage/'. $dog->image) }}" data-toggle="lightbox" data-title="{{$dog->name}}" data-footer="{{ $dog->location }}">
                    <img style="height:700px;width:100%;border:1px solid;" src="{{ URL::asset('/storage/'. $dog->image) }}" alt="" class="img-rounded img-responsive" />
                </a>        
            </div>
        </div>
    </div>
</div> -->




@endsection

@section('js')

<script src="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
<script src="{{ asset('ext_lib/blueimp/js/blueimp-gallery.min.js') }}"></script>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>

<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        type: 'image',
        onContentLoaded: function() {
            $(".ekko-lightbox-container").find("img").find(".modal-dialog").css("height","400px").css("width","400px");
        }
    });
});
</script>


@endsection