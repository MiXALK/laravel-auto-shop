@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            @if(count($goods))
                <h2>{{$goods->name}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="thumbnail">
                        <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{$goods->icon}}" alt="image" />
                            <div class="mask">
                                <p>{{$goods->short_description}}</p>
                                <p>{{$goods->description}}</p>
                                <div class="tools tools-bottom">
                                    <a href="{{ route('goods.edit', $goods->id) }}"><i class="fa fa-pencil"></i></a>
                                    <form action="/admin/goods/{{ $goods->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p>{{$goods->name}}</p>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($goods->comments as $comment)
                <p>{{$comment->text}}</p>
            @endforeach
            <a href="{{ route('goods.index') }}"><button type="button" class="btn btn-success navbar-right">BACK</button></a>

            <div class="card-block">
                <form action="/admin/goods/{{$goods->id}}/comments" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="text" placeholder="" required="required" type="text">
                        </div>
                        <button type="submit" class="btn btn-success navbar-left"><i>Save</i></button>
                    </div>
                </form>
            </div>
            @foreach($goods->photos as $photo)
                <img src="{{$photo->path}}" alt="{{$photo->alt}}">
            @endforeach
            <div class="col-xs-12">
                <p>Прикрепите ID изображения</p>
                <form action="/admin/goods/{{$goods->id}}/photo" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="goods_id" placeholder="" required="required" type="number" min="1" max="{{$count}}">
                        </div>
                        <button type="submit" class="btn btn-success navbar-left"><i>Прикрепить</i></button>

                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>

@endsection