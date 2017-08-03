<div class="linkbutton">
@foreach($items as $item)
	<span>| </span><a href="{{ strtolower($item->url) }}">{{ $item->title }}</a>
@endforeach
<span> | &copy; Hollywoof Talent Agency Ltd. All rights reserved 2017</span>
</div>

