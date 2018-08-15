@extends('layouts.app')
@section('content')
    <section class="b-pageHeader">
        <div class="container">
            <h1 class="wow zoomInLeft" data-wow-delay="0.3s">Корзина заказов</h1>
            <div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.3s">
                <h3>Подтверждение заказа</h3>
            </div>
        </div>
    </section>
    <div class="b-submit">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-11 col-sm-10 col-xs9">
                    <div class="b-submit__main">
                        @if(session()->has('cart'))

                            <form action="/" method="post" class='s-submit'>
                                <div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Список Ваших заказов</h2>
                                    </header>
                                    <ul class="list-group">
                                        @foreach($products as $product)
                                            <li class="list-group-item">
                                                <span class="badge">{{ $product['qty'] }}</span>
                                                <strong>{{ $product['item']['name'] }}</strong>
                                                <span class="b-submit__main-plan-money">( <span
                                                            class="b-submit__main-plan-money-num">${{ $product['price'] }}</span> <span
                                                            class="b-submit__main-plan-money-note"></span> )</span>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>

                                <div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Общая стоимость: ${{ $totalPrice }}</h2>
                                    </header>
                                </div>
                                <div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Общее количество: {{ session()->get('cart')->totalQty }}</h2>
                                    </header>
                                </div>
                                <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">
                                    Подтвердить заказ<span class="fa fa-angle-right"></span></button>

                            </form>


                        @else
                            <div class="b-submit__main-plan wow zoomInUp" data-wow-delay="0.3s">
                                <header class="s-headerSubmit s-lineDownLeft">
                                    <h2>Корзина пуста!</h2>
                                </header>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection