@extends('layouts.app')
@section('content')
    <section class="b-featured">
        <div class="container">
            <h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Featured Vehicles</h2>

            @if(session()->has('error'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <div id="charge-message" class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    </div>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <div id="charge-message" class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true"
                 data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4"
                 data-items-tablet="3" data-items-tablet-small="2">

                @if(count($goods))
                    @foreach($goods as $good)
                        <div>
                            <div class="b-featured__item wow rotateIn" data-wow-delay="0.3s">
                                <a href="{{route('auto.show', $good->id)}}">
                                    <img src="{{$good->icon}}" alt=""/>
                                </a>
                                <div class="b-featured__item-price">
                                    ${{$good->price}}
                                </div>
                                <div class="clearfix"></div>
                                <h5><a href="{{route('auto.show', $good->id)}}">{{$good->name}}</a></h5>
                                <div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM
                                </div>
                                <div class="b-featured__item-links">
                                    <a href="{{route('auto.show', $good->id)}}">{{$good->short_description}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section><!--b-featured-->
@endsection