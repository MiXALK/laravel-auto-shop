@extends('goods.index')
@section('content')
    <form action="/goods" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <lablel for="name">Name</lablel>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <lablel for="name">Alt</lablel>
            <input type="text" id="alt" name="alt" >
        </div>
        <div class="form-group">
            <lablel for="name">Title</lablel>
            <input type="text" id="title" name="title" >
        </div>
        <div class="form-group">
            <lablel for="name">Path</lablel>
            <input type="text" id="path" name="path" >
        </div>

        <button class="btn"
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