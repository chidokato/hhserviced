@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/category.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
@endsection

@section('content')
<div class="page bg-fafafa">
    

@include('layout.header-page')
<form action="{{ url()->current() }}" method="GET">
<section class="sec-fiter-search floating-label">
    <div class="container">
        <div class="hero-search">
            @include('layout.search')
        </div>
    </div>
</section>

<!------------------- CARD ------------------->
<section class="card-grid sales-sec list-tindang">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">H&H Serviced Apartments</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
                    </ol>
                </nav>
                <!-- <h1 class="text-uppercase title-cat">Đặt phòng</h1> -->
                
                <div class="sort-box">
                    <span>có <span class="text-main font-weight-semibold">Có {{ $posts->total() }}</span> khách sạn phù hợp</span>
                    <div class="sort-ct">
                        <div class="dropdown">
                            <a class="btn ripple-effect dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Sắp xếp theo: giá tăng dần <i class="icon-down ms-2"></i></span>
                            </a>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item checked" href="#">Giá tăng dần</a></li>
                            <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                            <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 g-4 row-cols-md-1 horizontal-view">
                    @foreach($posts as $key => $val)
                        <div class="col">
                            <div class="card card-s ChICl">
                                <a href="#">
                                    <span class="cat">
                                        <span class="room-status">Đã sử dụng</span>
                                    </span>
                                    <div class="swiper mySwiper-cat">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="data/images/{{$val->img?$val->img:'no_image.jpg'}}"></div>
                                            <div class="swiper-slide"><img src="data/images/{{$val->img?$val->img:'no_image.jpg'}}"></div>
                                            <div class="swiper-slide"><img src="data/images/{{$val->img?$val->img:'no_image.jpg'}}"></div>
                                            <div class="swiper-slide"><img src="data/images/{{$val->img?$val->img:'no_image.jpg'}}"></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </a>
                                <div class="card-body">
                                    <div class="card-body-wrap">
                                        <div class="cat-name"><span>{{$val->Province->name}}</span></div>
                                        <h5 class="card-title"><a href="#" class="text-truncate">{{$val->name}}</a></h5>
                                        <div class="card-info">
                                            <span><i class="icon-location me-2"></i>Nam Từ Liêm, Hà Nội</span>
                                        </div>
                                        <div class="rtyrtyr">
                                            <span class="hDtGYp"> <img class="hweAGz" src="assets/images/icon/image_3619735758_b71e263a8b.jpg"> view cây xanh</span>
                                            <span class="hDtGYp"> <img class="hweAGz" src="assets/images/icon/image_679768715_a07268216e.jpg"> view thành phố</span>
                                            <span class="hDtGYp"> + 6 </span>
                                        </div>
                                        <div class="digital text-truncate-set-2 text-truncate-set">
                                            {!! $val->content !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="price-container">
                                    <span class="sc-gUQvok letfsk">Giá</span>
                                    <div class="sc-gjNHFA hTuhhX">Liên hệ</div>
                                    <span class="sc-fmciRz flxGLN">Đồng / Đêm</span>
                                    <div class="sc-iFMAIt bSRrbj">Đã bao gồm thuế và phí</div>
                                    <div class="sc-eWfVMQ crMWDy mt-4"><button class="sc-dwsnSq isREzM primary-btn">Chọn phòng</button></div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="paginate-search">
                    <div>Hiển thị: </div>
                    <select class="paginate" name="per_page" onchange="this.form.submit()">
                        <option value="12" {{ request()->per_page == 12 ? 'selected' : '' }}>12</option>
                        <option value="24" {{ request()->per_page == 24 ? 'selected' : '' }}>24</option>
                        <option value="48" {{ request()->per_page == 48 ? 'selected' : '' }}>48</option>
                        <option value="96" {{ request()->per_page == 96 ? 'selected' : '' }}>96</option>
                    </select>
                    <div> Từ {{ $posts->firstItem() }} đến {{ $posts->lastItem() }} trên tổng {{ $posts->total() }} </div>
                    {{ $posts->appends(request()->all())->links() }}
                </div>
                
            </div>

            <div class="col-lg-3 d-none d-lg-block">
                <div class="widget widget-list widget-hightlight mb-3">
                    <h4><span>Loại hình</span></h4>
                    @foreach($cats as $val)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{$val->id}}" id="flexCheck{{$val->id}}" {{ in_array($val->id, request()->input('categories', [])) ? 'checked' : '' }}>
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                    @endforeach
                    <hr>
                    <h4><span>Tình thành</span></h4>
                    @foreach($provinces as $val)
                        @if(count($val->Post) > 0)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="provinces[]" value="{{$val->id}}" id="flexCheck{{$val->id}}">
                            <label class="form-check-label aa22" for="flexCheck{{$val->id}}">
                                <span>{{$val->name}}</span> <span>({{ count($val->Post) }})</span>
                            </label>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</section>
<!------------------- END CARD ------------------->
</form>
</div>
@endsection


@section('js')
<!-- jQuery CDN -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script>
    var swiper = new Swiper(".mySwiper-cat", {
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      spaceBetween: 5, 
    });
  </script>

@endsection