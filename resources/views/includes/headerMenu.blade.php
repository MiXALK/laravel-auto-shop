<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="collapse navbar-collapse navbar-main-slide" id="nav">
    <ul class="navbar-nav-menu">
        @foreach($categories as $category)

            @if($category->children->count())
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url("category/$category->slug")}}">{{$category->title}}
                        <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu h-nav">
                        @include('includes.headerMenu', ['categories' => $category->children])
                    </ul>
            @else
                <li><a href="{{url("category/$category->slug")}}">{{$category->title}}</a></li>

            @endif
            </li>
        @endforeach
    </ul>
</div>