@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/home.css" rel="stylesheet">
@endsection

@section('content')

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
                        <div class="" id="sale-search">
                            <div class="hero-search-wrap">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Điểm đến</label>
                                            <input class="form-control" type="" name="" placeholder="Tìm điểm đến">
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-lg-flex">
                                        <div class="form-group">
                                            <label>Nhận phòng</label>
                                            <input class="form-control" type="" name="" placeholder="T5 20 Th10 2024">
                                        </div>
                                        <div class="form-group">
                                            <label>Trả phòng</label>
                                            <input class="form-control" type="" name="" placeholder="T5 20 Th10 2024">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group border-none">
                                            <label>Số khách</label>
                                            <input class="form-control" type="" name="" placeholder="2">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-submit">Nhận phòng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn-button">Khám phá</button>
                        </div>
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
                    <h2><span class="cover-title-filled text-main">Chốn dừng chân an yên <br> giữa nhịp sống sôi động</span></h2>
                </div>
                <div class="cover-descip">
                    <p> Vừa cung cấp đầy đủ các tiện nghi giống như một khách sạn truyền thống, nhưng lại có thêm không gian, tiện lợi và tiện nghi để bạn cảm thấy như đang ở trong chính ngôi nhà của mình, H&H Serviced Apartments hứa hẹn sẽ mang đến trải nghiệm lưu trú hoàn hảo cho những chuyến "dịch chuyển" của quý khách.</p>
                </div>
                <button class="btn-button">Khám phá thêm</button>
                <div class="line"></div>
                <div class="cover-title">
                    <h2><span class="cover-title-filled text-main">Khám phá chuỗi căn hộ <br> dịch vụ của H&H</span></h2>
                </div>
            </div>
        </div>

        <div class="product-hot-slider">
            <div class="position-relative grid-view">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($news as $val)
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
                                                <span class="">
                                                    {{$val->detail}}
                                                </span>
                                            </div>
                                        </div>
                                        <button class="btn-button">Đặt ngay</button>
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
                <h2><span class="cover-title-filled">Đăng kí thành viên Hi-Club</span></h2>
                <h3>Mở khoá đặc quyền, nâng tầm trải nghiệm</h3>
                <p>Gia nhập Hi-Club và tích luỹ số đêm trải nghiệm tại H&H để tận hưởng hàng loạt các quyền lợi và ưu đãi độc quyền</p>
            </div>
            <div>
                <button class="btn-button"> Tham gia ngay </button>
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
                            <h2><span class="cover-title-filled">Về chúng tôi</span></h2>
                        </div>
                        <div class="cover-descip">
                            <h3>Tiên phong chuỗi căn hộ dịch vụ thế hệ mới</h3>
                            <p>H&H Serviced Apartments, vận hành bởi Vietnam Homes Group, tự hào mang đến chuỗi căn hộ dịch vụ thế hệ mới, mở ra một trải nghiệm sống hoàn hảo, nơi bạn tận hưởng trọn vẹn sự tiện nghi mà vẫn giữ được nét riêng tư cho riêng mình.</p>
                            <p>Tại H&H Serviced Apartments, mỗi chuyến đi đều là một câu chuyện riêng, được viết nên bởi chính bạn. Với mô hình căn hộ khách sạn thế hệ mới, H&H mong muốn "tái định nghĩa" những chuyến đi, kiến tạo nên những trải nghiệm đong đầy cảm xúc, nơi sự thoải mái tuyệt đối hòa quyện cùng nét đẹp văn hóa bản địa. Mỗi chuyến đi cùng H&H sẽ là một hành trình khám phá, một câu chuyện kể đầy thi vị về những miền đất mới.</p>
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
                    slidesPerView: 2,
                    spaceBetween: 0,
                    coverflowEffect: {
                        
                        depth: 10,
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
