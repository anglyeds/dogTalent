

<ul id = "MenuBar1" class="MenuBarHorizontal">
@foreach($items as $item)
	<li><span>| </span><a href="{{ strtolower($item->url) }}">{{ $item->title }}</a></li>
@endforeach
<span> |</span>
</ul>

