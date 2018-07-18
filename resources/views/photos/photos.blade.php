@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Photo</div>

                    <div class="panel-body">
                            @foreach($photos as $photo)
                            <div class="alert alert-success">
                                <img src="{{ $photo->path }}" alt="">
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection