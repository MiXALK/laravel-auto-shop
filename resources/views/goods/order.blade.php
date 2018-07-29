@extends('layouts.app')
@section('content')
    <form action="/orders" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <lablel for="email">Email</lablel>
            <input type="email" id="email" name="email" value="{{$email}}">
        </div>
        <div class="form-group">
            <lablel for="good_name">Good name</lablel>
            <input type="text" id="good_name" name="good_name" value="">
        </div>

        <button class="btn btn"
                type="submit">Сохранить</button>
    </form>
    <hr>
    @if(count($errors))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif
@endsection