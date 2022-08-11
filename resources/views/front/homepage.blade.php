   @extends('front.layouts.master')

   @section('body_id')head-page
   @endsection

   @section('lang')
   <ul class="lang">
    <li class="@if(App::getLocale()==='en')  active @endif">
        <a href="/">
            en
        </a>
    </li>
    <li class="@if(App::getLocale()==='ru')  active @endif">
        <a href="/ru">
            ru
        </a>
    </li>
    <li class="@if(App::getLocale()==='de')  active @endif">
        <a href="/de">
            de
        </a>
    </li>
    </ul>
   @endsection
   <!--Home start-->
<section id="home">
    <div class="img">
        <img src="{{Voyager::image($home->image)}}">
    </div>
    <div class="blur"></div>
    <div class="container">
        <div class="row">
            <div>
                <p>
                    {{$home->getTranslatedAttribute('desc', App::getLocale(), 'en')}}
                </p>
                <a href="#about">
                    <img src="{{asset('front/')}}/./img/arrow-bottom.svg" alt="">
                </a>
                <h1>
                    {{$home->getTranslatedAttribute('title', App::getLocale(), 'en')}}
                </h1>
            </div>
        </div>
    </div>
</section>
<!--Home-end-->
<!--About start-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="bg-2"></div>
            <div class="bg-1"></div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/image 7.png" alt="">
            </div>
            <div data-aos="fade-up" class="col-lg-4 col-md-12">
                <h2 class="head-text-left">{{__('lang.about_us')}}</h2>
                <p class="body-text">
                    {{$about->getTranslatedAttribute('desc', App::getLocale(), 'en')}}
                </p>
            </div>
        </div>
    </div>
</section>
<!--About end-->
<!--Destination start-->
<section id="destination">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    {{__('lang.home_destination_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text">
                    {{__('lang.home_destination_desc')}} 
                </p>
            </div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/image 6.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--Destination end-->
<!-- ThumbSlider -->
<section id="thumbslider">
    <h1 data-aos="fade-up" class="head-text">
       {{__('lang.explore_our_top_destinations')}}
    </h1>
    <div data-aos="fade-up" class="manshet_appartment">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 10 1.png" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Azerbaijan')}}</p>
                                <h1>{{__('lang.Baku')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 8.jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Turkey')}}</p>
                                <h1>{{__('lang.Izmir')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 9 (2).jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Turkey')}}</p>
                                <h1>{{__('lang.Cappadocia')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 5.jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Turkey')}}</p>
                                <h1>{{__('lang.Antalya')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 10 1.png" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Azerbaijan')}}</p>
                                <h1>{{__('lang.Baku')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 8.jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Turkey')}}</p>
                                <h1>{{__('lang.Izmir')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_img">
                        <img src="{{asset('front/')}}/img/image 9 (2).jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <p>{{__('lang.Turkey')}}</p>
                                <h1>{{__('lang.Cappadocia')}}</h1>
                                <form action="./destination.html" method="get">
                                    <button class="open-dest">
                                        {{__('lang.read_more')}}

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="mobile-swiper swiper-container gallery-thumbs side-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/image 10 2.png" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Azerbaijan')}}

                        </p>
                        <h1 class="city">
                            {{__('lang.Baku')}}
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/Rectangle 6 (1).jpg" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Turkey')}}
                        </p>
                        <h1 class="city">
                            {{__('lang.Izmir')}}
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/Rectangle 7 (1).jpg" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Turkey')}}
                        </p>
                        <h1 class="city">
                            {{__('lang.Cappadocia')}} 
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/Rectangle 8 (1).jpg" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Turkey')}}
                        </p>
                        <h1 class="city">
                            {{__('lang.Antalya')}}
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/image 10 2.png" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Azerbaijan')}} 
                        </p>
                        <h1 class="city">
                            {{__('lang.Baku')}} 

                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/Rectangle 6 (1).jpg" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Turkey')}}
                        </p>
                        <h1 class="city">
                            {{__('lang.Izmir')}} 
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sld_thumb_img">
                        <img src="{{asset('front/')}}/img/Rectangle 7 (1).jpg" alt="" class="thumb_img" />
                        <p class="country">
                            {{__('lang.Turkey')}}
                        </p>
                        <h1 class="city">
                            {{__('lang.Cappadocia')}}  
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <hr class="slider-hr">
    </div>
</section>
<!-- End ThumbSlider -->
<!--Why us start-->
<section id="why-us">
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-up" class="head-text">{{__('lang.why_us')}}</h1>
            <div data-aos="fade-up" class="why-card">
                <div class="blur_effect"></div>
                <img src="{{asset('front/')}}/./img/experience.png" alt="">
                <h3>
                    {{__('lang.why_us_experience')}}
                </h3>
                <p>
                    {{__('lang.why_us_experience_desc')}}
                </p>
            </div>
            <div data-aos="fade-up" class="why-card">
                <div class="blur_effect"></div>
                <img src="{{asset('front/')}}/./img/service.png" alt="">
                <h3>
                    {{__('lang.why_us_service')}} 
                </h3>
                <p>
                    {{__('lang.why_us_service_desc')}} 
                </p>
            </div>
            <div data-aos="fade-up" class="why-card">
                <div class="blur_effect"></div>
                <img src="{{asset('front/')}}/./img/transfer.png" alt="">
                <h3>
                    {{__('lang.why_us_transfer')}} 
                </h3>
                <p>
                    {{__('lang.why_us_transfer_desc')}} 
                </p>
            </div>
        </div>
    </div>
</section>
<!--Why us end-->
<!--Reference start-->
<section id="reference">
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-up" class="head-text">{{__('lang.reference')}}</h1>
            <div data-aos="fade-up" class="slider owl-carousel owl-theme">
                @foreach ($references as $reference)
                <div class="item">
                    <div class="ref-card">
                        <img src="{{Voyager::image($reference->logo)}}" alt="">
                        <p>
                            {{$reference->getTranslatedAttribute('desc', App::getLocale(), 'en')}}
                        </p>
                        <div class="card-foot">
                            <h4>
                                {{$reference->name}}
                            </h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
</section>
<!--Reference end-->
<!--Contact start-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-lg-5 col-md-12">
                <h1 class="head-text-left">
                    
                    {{__('lang.contact_us')}}
                </h1>
                <p class="body-text">
                    {{__('lang.contact_us_desc')}}
                </p>
                <form action="{{route('contact')}}" method="post">
                    @csrf
                    <div class="form-control">
                        <input type="text" name="name" placeholder="{{__('lang.name_surname')}}">
                        <input type="email" name="email" placeholder="{{__('lang.email')}}">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="{{__('lang.message')}}"></textarea>
                        <button class="send-btn">
                            {{__('lang.send')}}
                        </button>
                    </div>
                </form>
            </div>
            <div data-aos="fade-up" class="bg-colors col-md-12">
                <div class="bg-color-1"></div>
                <div class="bg-color-2"></div>
                <div class="bg-color-3"></div>
            </div>
            <div data-aos="fade-up" class="col-lg-5 col-md-12">
                <img src="{{asset('front/')}}/./img/image 8.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--Contact end-->
