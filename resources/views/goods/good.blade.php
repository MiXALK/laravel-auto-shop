@extends('layouts.app')
@section('content')
    <section class="b-pageHeader">
        <div class="container">
            <h1 class="wow zoomInLeft" data-wow-delay="0.5s">Vehicle Details</h1>
        </div>
    </section><!--b-pageHeader-->
    <section class="b-detail s-shadow">
        <div class="container">
            <header class="b-detail__head s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-sm-9 col-xs-12">
                        <div class="b-detail__head-title">
                            <h1>{{$good->name}}</h1>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="b-detail__head-price">
                            <div class="b-detail__head-price-num">$44,380</div>
                            <p>Included Taxes &amp; Checkup</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="b-detail__main">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="b-detail__main-info">
                            <div class="b-detail__main-info-images wow zoomInUp" data-wow-delay="0.5s">
                                <div class="row m-smallPadding">
                                    <div class="col-xs-10">
                                        <ul class="b-detail__main-info-images-big bxslider enable-bx-slider" data-pager-custom="#bx-pager" data-mode="horizontal" data-pager-slide="true" data-mode-pager="vertical" data-pager-qty="5">
                                            <li class="s-relative">
                                                <img class="img-responsive center-block" src="{{$good->icon}}" alt="nissan" />
                                            </li>
                                            @foreach($good->photos as $photo)
                                                @if($photo)
                                                <li class="s-relative">
                                                    <a data-toggle="modal" data-target="#myModal" href="#" class="b-items__cars-one-img-video"><span class="fa fa-film"></span>VIDEO</a>
                                                    <img class="img-responsive center-block" src="{{$photo->path}}" alt="{{$photo->alt}}" />
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-xs-2 pagerSlider pagerVertical">
                                        <div class="b-detail__main-info-images-small" id="bx-pager">
                                            <a href="#" data-slide-index="0" class="b-detail__main-info-images-small-one">
                                                <img class="img-responsive" src="{{$good->icon}}" alt="" />
                                            </a>
                                            @foreach($good->photos as $photo)
                                                @if($photo)

                                                <a href="#" data-slide-index="1" class="b-detail__main-info-images-small-one">
                                                    <img class="img-responsive" src="{{$photo->path}}" alt="{{$photo->alt}}" />
                                                </a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-detail__main-info-characteristics wow zoomInUp" data-wow-delay="0.5s">
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-car"></span></div>
                                        <p>{{$good->short_description}}</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        Year
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-trophy"></span></div>
                                        <p>5,000KM</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        Warrenty
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-at"></span></div>
                                        <p>Auto</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        Transmission
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-car"></span></div>
                                        <p>FWD</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        Drivetrain
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-user"></span></div>
                                        <p>5</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        Passangers
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-fire-extinguisher"></span></div>
                                        <p>10.8L</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        In City
                                    </div>
                                </div>
                                <div class="b-detail__main-info-characteristics-one">
                                    <div class="b-detail__main-info-characteristics-one-top">
                                        <div><span class="fa fa-fire-extinguisher"></span></div>
                                        <p>7.5L</p>
                                    </div>
                                    <div class="b-detail__main-info-characteristics-one-bottom">
                                        On Highway
                                    </div>
                                </div>
                            </div>
                            <div class="b-detail__main-info-text wow zoomInUp" data-wow-delay="0.5s">
                                <div class="b-detail__main-aside-about-form-links">
                                    <a href="#" class="j-tab m-active s-lineDownCenter" data-to='#info1'>GENERAL INQUIRY</a>
                                </div>
                                <div id="info1">
                                    <p>{{$good->description}}</p>

                                </div>
                            </div>
                            <div class="b-detail__main-info-extra wow zoomInUp" data-wow-delay="0.5s">
                                <h2 class="s-titleDet">Комментарии</h2>
                                <div class="row">
                                    <div class="col-xs-12">
                                        @foreach($good->comments as $comment)
                                            <p><span class="fa fa-check"></span> {{$comment->text}}</p>
                                        @endforeach
                                    </div>
                                    <div class="col-xs-12">
                                        <form action="/admin/goods/{{$good->id}}/comments" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="text" placeholder="" required="required" type="text">
                                                </div>
                                                <button type="submit" class="btn m-btn">Высказаться<span class="fa fa-angle-right"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <aside class="b-detail__main-aside">
                            <div class="b-detail__main-aside-desc wow zoomInUp" data-wow-delay="0.5s">
                                <h2 class="s-titleDet">Description</h2>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h4 class="b-detail__main-aside-desc-title">Model</h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="b-detail__main-aside-desc-value">{{$good->name}}</p>
                                    </div>
                                </div>

                                <h2 class="s-titleDet">Shops</h2>
                                @if($good->shops)
                                @foreach($good->shops as $shop)
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h4 class="b-detail__main-aside-desc-title">{{$shop->address}}</h4>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="b-detail__main-aside-about wow zoomInUp" data-wow-delay="0.5s">
                                <h2 class="s-titleDet">INQUIRE ABOUT THIS VEHICLE</h2>
                                <div class="b-detail__main-aside-about-call">
                                    <span class="fa fa-phone"></span>
                                    <div>1-888-378-4027</div>
                                    <p>Call the seller 24/7 and they would help you.</p>
                                </div>
                                <div class="b-detail__main-aside-about-seller">
                                    <p>Seller Info: <span>NissanCarDealer</span></p>
                                </div>
                                <div class="b-detail__main-aside-about-form">
                                    <div class="b-detail__main-aside-about-form-links">
                                        <a href="#" class="j-tab m-active s-lineDownCenter" data-to='#form1'>GENERAL INQUIRY</a>
                                        <a href="#" class="j-tab" data-to='#form2'>SCHEDULE TEST DRIVE</a>
                                    </div>
                                    <form id="form1" action="/" method="post">
                                        <input type="text" placeholder="YOUR NAME" value="" name="name" />
                                        <input type="email" placeholder="EMAIL ADDRESS" value="" name="email" />
                                        <input type="tel" placeholder="PHONE NO." value="" name="name" />
                                        <textarea name="text" placeholder="message"></textarea>
                                        <div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
                                        <div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
                                        <button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
                                    </form>
                                    <form id="form2" action="/" method="post">
                                        <input type="text" placeholder="YOUR NAME" value="" name="name" />
                                        <textarea name="text" placeholder="message"></textarea>
                                        <div><input type="checkbox" name="one" value="" /><label>Send me a copy of this message</label></div>
                                        <div><input type="checkbox" name="two" value="" /><label>Send me a copy of this message</label></div>
                                        <button type="submit" class="btn m-btn">SEND MESSAGE<span class="fa fa-angle-right"></span></button>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section><!--b-detail-->

@endsection