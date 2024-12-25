@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/experiences.css" rel="stylesheet">
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
</form>

<section class="bannertop">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="img">
					<div class="balloon"><img src="assets/img/experiences/bong-trai-1.png"></div>
					<img src="assets/img/experiences/girl.png">
				</div>
			</div>
			<div class="col-md-8">
				<div class="content">
					<img src="assets/img/experiences/text.png">
					<p>
						Được xây dựng dựa trên tầm nhìn: H&H "tái định nghĩa" mỗi chuyến đi, để mối chuyến lưu trú là sự kết hợp hoàn hảo giữa thoải mái, tiện nghi và nét văn hóa độc đáo. H&H tự hào là tổ hợp dịch vụ "All-in-one" lưu trú - ẩm thực - giải trí đỉnh cao, mang đến "thiên đường trải nghiệm" ngay trong tầm tay!
					</p>
				</div>
			</div>
		</div>
	</div>
</section>



</div>
@endsection

@section('js')

@endsection