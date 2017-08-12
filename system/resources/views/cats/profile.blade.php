@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ URL::asset('/storage/'. $cat->image) }}" data-toggle="lightbox" data-title="{{$cat->name}}" data-footer="{{ $cat->location }}">
                            <img style="height:500px;width:100%;" src="{{ URL::asset('/storage/'. $cat->image) }}" alt="" class="img-rounded img-responsive" />
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{$cat->name}}</h4>
                        <small><cite title="{{ $cat->location }}">{{ $cat->location }} <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            
                            <i class="glyphicon glyphicon-book"></i><span>{{ $cat->description }}</span>
                            <br />
                            <i class="glyphicon glyphicon-glyphicon glyphicon-star-empty"></i>{{ $cat->type }}
                            <br />
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>{{$cat->created_at}}</p>
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
        </div>
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('bower_components/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
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