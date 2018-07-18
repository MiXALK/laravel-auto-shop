@extends('goods.index')
@section('content')
    <form action="/goods" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <lablel for="name">Name item</lablel>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <lablel for="name">Short Description</lablel>
            <input type="text" id="short_description" name="short_description" >
        </div>
        <div class="form-group">
            <lablel for="name">Description</lablel>
            <input type="text" id="description" name="description" >
        </div>
        <div class="form-group">
            <lablel for="name">Icon</lablel>
            <input type="text" id="icon" name="icon" >
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