@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}data/images/z6111931192228-68adeb5ed9b7d918f28bc256b902e2cb_34.jpg@endsection

@section('css')
<link href="assets/css/home.css" rel="stylesheet">
@endsection

@section('content')
<div class="home">
    

@include('layout.header')
<!------------------- HERO ------------------->
<section class="sec-hero">
    <div class="hero-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($slider as $val)
                <div class="swiper-slide">
                    <div class="dark-overlay"></div> <!-- Thêm lớp phủ màu tối -->
                    <span style='background-image: url("data/images/{{$val->img}}")' class="w-100 thumb"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="slider-content">
                                    <!-- {!! $val->content !!} -->
                                    <!-- <button class="btn-button">Khám phá</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-navigator">
                <div class="swiper-pagination"></div>
                <div class="swiper-navigator-btn">
                    <div class="swiper-button-prev"><i class="icon-prev-thin"></i></div>
                    <div class="swiper-button-next"><i class="icon-next-thin"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="hero-search">
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-9">
                        @include('layout.search')
                        <br>
                        <br>
                        <button class="btn-button">{{__('lang.home_7')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------------- PRODUCT RENT ------------------->
<section class="sec-product-rent">
    <div class="container">
        <div class="cover-title-home">
            <div class="text-center">
                <div class="cover-title">
                    <h2><span class="cover-title-filled text-main">{{__('lang.home_8')}} <br> {{__('lang.home_9')}}</span></h2>
                </div>
                <div class="cover-descip">
                    <p> {{__('lang.home_10')}}</p>
                </div>
                <button class="btn-button">{{__('lang.home_11')}}</button>
                <div class="line"></div>
                <div class="cover-title">
                    <h2><span class="cover-title-filled text-main">{{__('lang.home_12')}} <br> {{__('lang.home_13')}}</span></h2>
                </div>
            </div>
        </div>

        <div class="product-hot-slider">
            <div class="position-relative grid-view">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($product as $val)
                        <div class="swiper-slide">
                            <div class="col">
                                <div class="card card-s card-s4 ">
                                    <a href="{{$val->category->slug}}/{{$val->slug}}">
                                        <span><img src="assets/images/space-3.gif" class="card-img-top" style="background-image: url('data/images/{{$val->img?$val->img:'no_image.jpg'}}');" alt="..."></span>
                                    </a>
                                    <div class="card-body">
                                        <div class="card-body-wrap">
                                            <h5 class="card-title"><a href="{{$val->category->slug}}/{{$val->slug}}" class="text-truncate">{{$val->name}}</a></h5>
                                            <div class="card-info" title="">
                                                <span style="height: 139px; overflow: hidden;">
                                                    {!! $val->content !!}
                                                </span>
                                            </div>
                                        </div>
                                        <button class="btn-button">{{__('lang.home_16')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div> -->
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
      
    </div>
</section>

<!------------------- SERVICE ------------------->
<section class="sec-productcity-hp sec-product-sale">
    <div class="container position-relative">
        <div class="cover-title-home">
            <div class="cover-title">
                <h2><span class="cover-title-filled">{{__('lang.home_22')}}</span></h2>
                <h3>{{__('lang.home_23')}}</h3>
                <p>{{__('lang.home_24')}}</p>
            </div>
            <div>
                <button class="btn-button"> {{__('lang.home_25')}} </button>
            </div>
        </div>
    </div>
</section>
<!------------------- END SERVICE ------------------->

<section class="sec-productcity-hp about-home">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-7">
                <div class="cover-title-home">
                    <div class="text-start">
                        <div class="cover-title">
                            <h2><span class="cover-title-filled">{{__('lang.home_26')}}</span></h2>
                        </div>
                        <div class="cover-descip">
                            <h3>{{__('lang.home_27')}}</h3>
                            <p>{{__('lang.home_28')}}</p>
                            <p>{{__('lang.home_29')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="img"><img src="assets/images/web-04.png"></div>
                <div class="img"><img src="assets/images/web-08.png"></div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section('js')
<script>
    var swiper8 = new Swiper(".hero-slider .swiper", {
        spaceBetween: 0,
        effect: "fade",
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".hero-slider .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".hero-slider .swiper-button-next",
            prevEl: ".hero-slider .swiper-button-prev",
        },
    });

    var swiper7 = new Swiper(".product-hot-slider .swiper", {
            slidesPerView: 3,
            loop: true,
            spaceBetween: 30,
            grabCursor: true,
            centeredSlides: true,
            effect: "coverflow",
            coverflowEffect: {
                rotate: 20,
                stretch: 20,
                scale:.8,
                depth: 0,
                modifier: 1,
                slideShadows : false,
            },
            pagination: {
                el: ".product-hot-slider .swiper-pagination",
                clickable: true,
            },
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1.3,
                    spaceBetween: 0,
                    coverflowEffect: {
                        depth: 2,
                    }
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                // when window width is >= 640px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: ".product-hot-slider .swiper-button-next",
                        prevEl: ".product-hot-slider .swiper-button-prev",
                    },
                }
            },  
        });

</script>

@endsection
