@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(count($goods))
                    @foreach($goods as $good)

                <h2>{{$good->name}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="thumbnail">
                        <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{$good->icon}}" alt="image" />
                            <div class="mask">
                                <p>{{$good->short_description}}</p>
                                <p>{{$good->description}}</p>
                                <div class="tools tools-bottom">
                                    <a href="/admin/goods/edit/{{$good->id}}"><i class="fa fa-pencil"></i></a>
                                    <form action="/admin/goods/{{ $good->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>{{$good->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <a href="/admin"><button type="button" class="btn btn-success navbar-right">BACK</button></a>
        </div>
    </div>

@endsection