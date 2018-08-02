<li><a><i class="fa fa-car"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="{{route('goods.index')}}">Goods</a></li>
        <li><a href="{{route('photos.index')}}">Photos</a></li>
    </ul>
</li>
@foreach($collection as $link)

<h2><a href="{{$link['path']}}">{{$link['name']}}</a></h2>
@endforeach
