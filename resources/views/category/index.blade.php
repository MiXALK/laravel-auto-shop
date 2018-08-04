@extends('layouts.app')
@section('content')

    <section class="b-items s-shadow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    @forelse ($goods as $good)

                    <div class="b-items__cars">
                        <div class="b-items__cars-one wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-items__cars-one-img">
                                <a href="{{route('auto.show', $good)}}">
                                    <img src="{{$good->icon}}" alt='dodge' class="b-blog__posts-one-body-main-img-small"/>
                                </a>
                            </div>
                            <div class="b-items__cars-one-info">
                                <header class="b-items__cars-one-info-header s-lineDownLeft">
                                    <h2>{{$good->name}}</h2>
                                    <span>${{$good->price}}</span>
                                </header>
                                <div class="b-items__cars-one-info-km">
                                    <span class="fa fa-tachometer"></span> {{$good->description}}
                                </div>
                                <div class="b-items__cars-one-info-details">
                                     <a href="{{route('auto.show', $good)}}" class="btn m-btn">Подробнее<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="b-items__cars">
                            <h2 class="text-center">Пусто</h2>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </section><!--b-items-->

@endsection