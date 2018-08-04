@extends('admin.layouts.admin')
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        @if(count($goods))

                        <form class="form-horizontal form-label-left" novalidate action="{{route('goods.update', $goods)}}" method="post">
                            {{ csrf_field() }}
                            @method('PATCH')
                            <span class="section">Редактировать {{$goods->name}}</span>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name item <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text" value="{{$goods->name}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_description">Short Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="short_description" name="short_description" required="required" class="form-control col-md-7 col-xs-12" value="{{$goods->short_description}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="url" id="description" name="description" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="{{$goods->description}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Icon <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="url" id="icon" name="icon" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="{{$goods->icon}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Цена <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="price" name="price" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="{{$goods->price}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Раздел <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="categories" class="form-control col-md-7 col-xs-12">
                                        @include('admin.goods.categories', ['categories' => $categories])
                                    </select>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{route('goods.index')}}"><button id="cancel" type="button" class="btn btn-primary">Cancel</button></a>
                                    <button id="send" type="submit" class="btn btn-success">UPDATE</button>
                                </div>
                            </div>
                        </form>
                        @endif


                        <br>
                        @if(count($errors))
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection