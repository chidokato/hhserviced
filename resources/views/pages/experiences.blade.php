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
	<div class="balloon"><img src="assets/img/experiences/bong-phai-2.png"></div>
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

<section class="section1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>666 Golden Lounge</h2>
				<p>666 Golden Lounge - trái tim của H&H, nơi hội tụ tinh hoa ẩm thực, không gian sang trọng và dịch vụ đẳng cấp. Cùng 666 Golden Lounge trải nghiệm những khoảnh khắc tuyệt vời và khơi nguồn cảm hứng bất tận!</p>
			</div>
		</div>
	</div>
</section>

<section class="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h3>666 Lounge</h3>
					<p>Khởi đầu chuyến lưu trú hoàn hảo với thủ tục check-in & check-out nhanh chóng tại quầy lễ tân sang trọng.</p>
					<div class="icon">
						<img src="assets/img/experiences/icon-1.png">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img">
					<img src="assets/img/experiences/lounge.png">
					<div class="spotlight"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="img">
					<img src="assets/img/experiences/restaurant.png">					
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3>666 Restaurant</h3>
					<p>Trải nghiệm hành trình ẩm thực Việt-Trung đặc sắc, đánh thức đa giác quan tại 666 Restaurant.</p>
					<div class="icon text-left">
						<img src="assets/img/experiences/icon-2.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h3>666 Coffee</h3>
					<p>Bật mood sáng tạo hay tận hưởng phút giây thư giãn? 666 Coffee luôn sẵn sàng chào đón bạn!</p>
					<div class="icon">
						<img src="assets/img/experiences/icon-3.png">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img">
					<img src="assets/img/experiences/coffee.png">					
				</div>
			</div>
		</div>
	</div>
</section>

</div>
@endsection

@section('js')

@endsection