@extends('front.layouts.master')
@section('title')
    {{__('lang.title_destination')}}
@endsection

@section('lang')
<ul class="lang">
    <li class="@if(App::getLocale()==='en')  active @endif">
        <a href="/destinations">
            en
        </a>
    </li>
    <li class="@if(App::getLocale()==='ru')  active @endif">
        <a href="/ru/naznacheniya">
            ru
        </a>
    </li>
    <li class="@if(App::getLocale()==='de')  active @endif">
        <a href="/de/ziel">
            de
        </a>
    </li>
</ul>
@endsection

@section('content')

<section id="dest">
    <img data-aos="fade-up" src="{{asset('front/')}}/./img/Ellipse 19 (1).png" class="bg-img-1" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    {{__('lang.destinations')}}
                </h2>
                @foreach ($countries as $country)

                @php
                    $dest=App\Models\Destination::withTranslations()->where('country_id',$country->id)->first();
                @endphp

                  
                <p data-aos="fade-up" class="body-text @if($country->id==1) aze-text @else tr-text @endif">
                   
                    {{$dest->getTranslatedAttribute('desc', App::getLocale(), 'en')}}
 
                </p>
                @endforeach
   
            </div>

            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                @foreach ($countries as $country) 
                @php
                    $dest=App\Models\Destination::withTranslations()->where('country_id',$country->id)->first();
                @endphp
                <div class="@if($country->id==1) az @else tr @endif() active">
                    <img src="{{Voyager::image($dest->image)}}" alt="">
                    <p class="country">
                        {{$country->getTranslatedAttribute('country', App::getLocale(), 'en')}}
                    </p>
                    <h2 class="city">
                        {{$dest->getTranslatedAttribute('city', App::getLocale(), 'en')}}
                    </h2>
                    <button>
                        <img src="{{asset('front/')}}/./img/dest-arrow.svg" alt="">
                    </button>
                </div>
                @endforeach
                {{-- <div class="tr">
                    <img src="{{asset('front/')}}/./img/image 2.png" alt="">
                    <p class="country">
                        Turkey
                    </p>
                    <h2 class="city">
                        Cappadocia
                    </h2>
                    <button>
                        <img src="{{asset('front/')}}/./img/dest-arrow.svg" alt="">
                    </button>
                </div> --}}
            </div>
           
        </div>
    </div>
</section>
<!--Destination end-->
<!--Dest-country start-->
<section id="dest-country">7
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div data-aos="fade-up" class="country-buttons">
                    
                    @foreach($countries as $country)
                    @php
                    $cities= App\Models\City::where('country_id',$country->id)->get();
                        

                    @endphp
                    <div class="button @if($country->id == 1) aze @else trk @endif active">
                        <button>
                            @if($country->id == 1) <img src="{{asset('front/')}}/./img/Group 15.svg" alt=""> @else   <img src="{{asset('front/')}}/./img/Group (7).svg" alt=""> @endif
                            
                            {{$country->getTranslatedAttribute('country', App::getLocale(), 'en')}}
                        </button>
                        <ul>
                            @foreach ($cities as $city)
                            @if ($city->country_id==$country->id)
                            <li>
                                {{$city->getTranslatedAttribute('city', App::getLocale(), 'en')}}
                            </li>
                            @endif
                            @endforeach
                           
                        </ul>
                    </div>
                    @endforeach
          

                </div>
            </div>
         
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                   {{__('lang.forget_risk')}}
                </h2>
                @foreach ($countries as $country)
                @php
                    $dest=App\Models\Destination::where('country_id',$country->id)->first();
                @endphp
                <p data-aos="fade-up" class="body-text @if($country->id==1) aze-text @else  tr-text @endif ">
                    {{$dest->getTranslatedAttribute('forget_risk', App::getLocale(), 'en')}}
                </p>
                @endforeach
            </div>
           
            
        </div>
    </div>
</section>
<!--Dest-country end-->
<!--Travel-photos start-->
<section id="travel-photos">
    <div class="container">
        <div class="row">
            <h2 data-aos="fade-up" class="head-text">
               {{__('lang.lets_us_uspire_you')}}
            </h2>
            @foreach ($countries as $country)
                
            @php
                $images=App\Models\TravelImage::where('country_id',$country->id)->get();
            @endphp
            @foreach ($images as $image)
            <div data-aos="fade-up" class="img @if($country->id==1) aze-images   @else trk-images @endif  aos-init aos-animate">
                <a href="{{Voyager::image($image->image)}}" data-fancybox="group" data-caption="This image has a caption 1">
                    <img class="thumbnail" src="{{Voyager::image($image->image)}}" />
                </a>  
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</section>
<!--Travel-photos end-->
<!--World start-->
<section id="world">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    {{__('lang.accommodation')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                   {{__('lang.accommodation_desc_aze')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.accommodation_desc_tr')}}

                </p>
            </div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/image 10.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--World end-->
<!--Travel start-->
<section id="travel">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/how-would.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/life-support 1.svg" alt="">
                   </span>
                    {{__('lang.travel_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.travel_text_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.travel_text_tr')}}
                    
                </p>
            </div>
        </div>
    </div>
</section>
<!--Travel end-->
<!--Accommodation start-->
<section id="travel" class="accomm travel">
    <div class="container">
        <div class="row">
            <div  class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/accom.svg" alt="">
                   </span>
                    {{__('lang.airport_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.airport_text_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.airport_text_tr')}}
                </p>
            </div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/image 6.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--Accommodation end-->
<!--Transport start-->
<section id="travel" class="transport">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/welcome.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/transport.svg" alt="">
                   </span>
                   {{__('lang.service_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.service_desc_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.service_desc_tr')}}
                </p>
            </div>
        </div>
    </div>
</section>
<!--Transport end-->
<!--Tour start-->
<section id="travel" class="tour travel">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/tour.svg" alt="">
                   </span>
                    {{__('lang.kongress_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.kongres_text_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.kongres_text_tr')}}
                </p>
            </div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/congress.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--Tour end-->
<!--Event start-->
<section id="travel" class="transport">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/image 7.png" alt="">
            </div>
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/event.svg" alt="">
                   </span>
                    {{__('lang.event_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.event_text_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.event_text_tr')}}
                </p>
            </div>
        </div>
    </div>
</section>
<!--Event end-->
<!--Tour start-->
<section id="travel" class="Supplier travel">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h2 data-aos="fade-up" class="head-text-left">
                    <span class="icon">
                        <img src="{{asset('front/')}}/./img/incentive.svg" alt="">
                   </span>
                   {{__('lang.incentive_title')}}
                </h2>
                <p data-aos="fade-up" class="body-text aze-text">
                    {{__('lang.incentive_text_az')}}
                </p>
                <p data-aos="fade-up" class="body-text tr-text">
                    {{__('lang.incentive_text_tr')}}
                </p>
            </div>
            <div data-aos="fade-up" class="col-lg-6 col-md-12">
                <img src="{{asset('front/')}}/./img/incentive.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--Supplier end-->
@endsection