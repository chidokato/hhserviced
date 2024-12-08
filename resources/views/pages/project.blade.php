@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<!-- css project -->
<link href="assets/css/project.css" rel="stylesheet">
<link href="assets/css/simpleLightbox.css" rel="stylesheet">
@endsection

@section('content')
@include('layout.header-page')

<div class="project">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">H&H Serviced Apartments</a></li>
                    <li class="breadcrumb-item"><a href="{{$post->category->slug}}">{{$post->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!------------------- MORE ------------------->
<section class="sec-gallery">
    <div class="container">
        <div class="">
            <div class="row g-3">
                <div class="col-lg-6">
                    <a class="card-overlay outline-effect video" title="1/10" href="https://www.youtube.com/embed/93JJbwWz154?autoplay=true&muted=true">
                        <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        <div class="card-overlay-body">
                            <div>Căn hộ Roman Plaza</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" title="2/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        </a>
                        <a class="card-overlay card-overlay-sm outline-effect" title="3/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card-overlay-flex">
                        <a class="card-overlay card-overlay-sm outline-effect" title="4/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg');"></span>
                        </a>
                        <a class="card-overlay card-overlay-sm outline-effect more" title="5/10" href="https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg">
                            <span class="card-overlay-img"><img src="assets/images/space-4.gif" alt="" class="w-100" style="background-image: url('https://blog.rever.vn/hubfs/chinh-sach-ho-tro-tai-chinh-kich-cau-thi-truong-bat-dong-san-cuoi-nam-1.jpg');"></span>
                            <i class="btn-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="more-item">
                    <a class="card-overlay" title="6/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg"></a>
                    <a class="card-overlay" title="7/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg"></a>
                    <a class="card-overlay" title="8/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg"></a>
                    <a class="card-overlay" title="9/10" href="https://top10tphcm.com/wp-content/uploads/2018/06/New-city-min.jpg"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="heading">
                <div class="left">
                    <h1 class="text-uppercase title-cat">{{$post->name}}</h1>
                </div>
            </div>
            <div class="status">
                <span> {!! $post->acreage ? '<i class="icon-acreage me-1"></i>'.$post->acreage.($post->acreage_max ? ' - '.$post->acreage_max : '').' m<sup>2</sup>' : '' !!}</span>
                <span> {!! $post->bedroom ? '<i class="icon-bed me-1"></i>'.$post->bedroom.($post->bedroom_max ? ' - '.$post->bedroom_max : '').' PN' : '' !!}</span>
                <span> {!! $post->wc ? '<i class="icon-bathroom me-1"></i>'.$post->wc.($post->wc_max ? ' - '.$post->wc_max : '').' WC' : '' !!}</span>
            </div>
        
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="fixtop">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.988211049866!2d105.8369637!3d21.022739599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1730256923424!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="address"><i class="icon-location me-1"></i> {{$post->address}}{{ $post->street_id ? ', '.$post->Street->name:'' }}{{$post->ward_id? ', '.$post->Ward->name:''}}{{', '.$post->District->name}}{{', '.$post->Province->name}} <a href="">Xem trên bản đồ</a></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="heading">
        <div class="left">
            <h2 class="text-uppercase title-cat">Lựa chọn phòng dành cho bạn</h2>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 g-3 g-lg-3 grid-view mb-5">
        @foreach($posts as $val)
        <div class="col">
            <div class="card card-s card-s4">
                <a href="#" data-id="2" class="project-Toggler">
                    <div class="swiper mySwiper-cat">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="data/images/{{$val->img}}"></div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="product-status">
                        <span><i class="icon-acreage me-1"></i>{{$val->acreage}}{{$val->acreage_max ? '-'.$val->acreage_max:''}}m2</span>
                        <span><i class="icon-bed me-1"></i>{{$val->bedroom}}PN</span>
                        <span><i class="icon-bathroom me-1"></i>{{$val->wc}}WC</span>
                    </div>
                </a>
                <div class="card-body">
                    <div class="card-body-wrap">
                        <h5 class="card-title"><a href="#" data-id="2" class="text-truncate project-Toggler">{{$val->name}}</a></h5>
                    </div>
                    <div class="card-footer">
                        <div class="card-price">
                            <div>Chỉ từ</div>
                            <div class="price"><span>1.600.000</span> Đồng/Đêm</div>
                            <span>Đã bao gồm thuế và phí</span>
                        </div>
                        <button>Đăt phòng</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<div class="overlay"></div>
<div class="ditail-project">
    <div class="close"><button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button></div>
    <div class="row">
        <div class="col-md-12">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper-product">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://img.mvillage.vn/gzBUaRKO9fmzVFZtNwaGgRjHdBBSqf_HK6lGVftntmU/rs:fit:500:500/plain/https%3A%2F%2Fcdn-v2.mvillage.vn%2Fcms%2Fimage_2580220616_c96d8a75bb.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://img.mvillage.vn/b_SyeB1r5D9PF2SOCqWxMeGz63jVCPbxlejxdR24dDM/rs:fit:1500:1500/plain/https%3A%2F%2Fcdn-v2.mvillage.vn%2Fcms%2Fimage_167661211_10aee3ebb5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://img.mvillage.vn/gzBUaRKO9fmzVFZtNwaGgRjHdBBSqf_HK6lGVftntmU/rs:fit:500:500/plain/https%3A%2F%2Fcdn-v2.mvillage.vn%2Fcms%2Fimage_2580220616_c96d8a75bb.jpg" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper-product-thumr">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://img.mvillage.vn/gzBUaRKO9fmzVFZtNwaGgRjHdBBSqf_HK6lGVftntmU/rs:fit:500:500/plain/https%3A%2F%2Fcdn-v2.mvillage.vn%2Fcms%2Fimage_2580220616_c96d8a75bb.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://img.mvillage.vn/gzBUaRKO9fmzVFZtNwaGgRjHdBBSqf_HK6lGVftntmU/rs:fit:500:500/plain/https%3A%2F%2Fcdn-v2.mvillage.vn%2Fcms%2Fimage_2580220616_c96d8a75bb.jpg" />
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('js')
<!-- js project -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="js/simpleLightbox.min.js"></script>
<script src="assets/js/project.js"></script>
@endsection