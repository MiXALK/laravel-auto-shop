@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(count($photos))


                <h2>{{$photos->name}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="thumbnail">
                        <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{$photos->path}}" alt="image" />
                            <div class="mask">
                                <p>{{$photos->alt}}</p>
                                <div class="tools tools-bottom">
                                    <a href="/admin/photos/edit/{{$photos->id}}"><i class="fa fa-pencil"></i></a>
                                    <form action="/admin/photos/{{ $photos->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>{{$photos->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <a href="/admin/photos"><button type="button" class="btn btn-success navbar-right">BACK</button></a>
        </div>
    </div>

@endsection