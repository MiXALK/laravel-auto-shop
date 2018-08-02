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
            <div class="col-xs-12">

            @foreach($goods->comments as $comment)
                <p>{{$comment->text}}</p>
            @endforeach
            </div>

            <div class="card-block">
                <form action="/admin/goods/{{$goods->id}}/comments" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="text" placeholder="" type="text">
                        </div>
                        <button type="submit" class="btn btn-success navbar-left"><i>Save</i></button>
                    </div>
                </form>
            </div>
            @if(count($errors))
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            @foreach($goods->photos as $photo)
                <img src="{{$photo->path}}" alt="{{$photo->alt}}">
            @endforeach
            <div class="col-xs-12">
                <h4>Прикрепите изображение</h4>
                <form action="/admin/goods/{{$goods->id}}/photo" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" name="photo_id" required="required">
                            @foreach($photos as $photo)
                                <option value="{{$photo->id}}">{{$photo->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <button type="submit" class="btn btn-success navbar-left"><i>Прикрепить</i></button>

                    </div>
                </form>
            </div>
            <br>
            <div class="col-xs-12">
                @foreach($goods->shops as $shop)
                    <div class="col-md-7 col-sm-7 col-xs-12">
                    <span>{{$shop->address}}</span>
                    </div>
                @endforeach
            </div>
            <div class="col-xs-12">
                <h4>Добавить адресс магазина</h4>
                <form action="/admin/goods/{{$goods->id}}/shop" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="address" required="required">
                                @foreach($shops as $shop)
                                    <option value="{{$shop->id}}">{{$shop->address}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success navbar-left"><i>Добавить</i></button>
                    </div>
                </form>
            </div>
            @endif
            <a href="{{ route('goods.index') }}"><button type="button" class="btn btn-success navbar-right">BACK</button></a>
        </div>
    </div>

@endsection