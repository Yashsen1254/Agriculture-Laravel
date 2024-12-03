@extends('frontend.layout.main')

@section('content')
<body>
	<!-- Section Slider -->
	<div class="section section-custom-16">
		<!-- Slider Hero -->
		<div class="slider-hero2" data-ntr-slider-hero2>
			<div class="slick-slider">
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/gallery-farm-1-800x800.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Pestisides</h1>
								<p class="slider-hero2_item_summary"></p>
								<p>
									<a class="link is-color-secondary" href="/shop">
										<span class="link_text">Shop Now</span>
										<span class="link_icon icon is-next"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/gallery-farm-2-800x800.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Pestisides</h1>
								<p class="slider-hero2_item_summary"></p>
								<p>
									<a class="link is-color-secondary" href="/shop">
										<span class="link_text">Shop Now</span>
										<span class="link_icon icon is-next"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/gallery-farm-3-800x800.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Pestisides</h1>
								<p class="slider-hero2_item_summary"></p>
								<p>
									<a class="link is-color-secondary" href="/shop">
										<span class="link_text">Shop Now</span>
										<span class="link_icon icon is-next"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider Hero End -->
	</div>
	<!-- Section Slider End -->
	<!-- Section Features -->
	<div class="section section-custom-17">
		<div class="container">
			<div class="grid">
				<div class="grid_row is-60">
					<div class="grid_col is-12 is-lg-4" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Feature -->
						<div class="feature">
							<div class="feature_icon">
								<div class="icon is-watch"></div>
							</div>
							<div class="feature_info">
								<h3 class="feature_title">Fast & Easy</h3>
								<p class="feature_summary"></p>
							</div>
						</div>
						<!-- Feature End -->
					</div>
					<div class="grid_col is-12 is-lg-4" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Feature -->
						<div class="feature">
							<div class="feature_icon">
								<div class="icon is-quality"></div>
							</div>
							<div class="feature_info">
								<h3 class="feature_title">High Quality</h3>
								<p class="feature_summary"></p>
							</div>
						</div>
						<!-- Feature End -->
					</div>
					<div class="grid_col is-12 is-lg-4" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
						<!-- Feature -->
						<div class="feature">
							<div class="feature_icon">
								<div class="icon is-box"></div>
							</div>
							<div class="feature_info">
								<h3 class="feature_title">Free Shipping</h3>
								<p class="feature_summary"></p>
							</div>
						</div>
						<!-- Feature End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Features End -->
	<!-- Section Banners -->
	<div class="section">
		<div class="container">
			<div class="grid">
				<div class="grid_row is-30 is-md-40" data-ntr-isotope='{"name":"banners", "itemSelector":".grid_col", "layoutMode":"masonry"}'>
					<div class="grid_sizer"></div>
					<div class="grid_col is-12 is-sm-6" data-aos="ntr-fade-up" data-aos-once="true"><a class="block hover-up" href="/shop"><img class="img-fluid" src="{{url('frontend/assets/img/banner-4.png')}}" alt="Banner"></a></div>
					<div class="grid_col is-12 is-sm-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200"><a class="block hover-up" href="/shop"><img class="img-fluid" src="{{url('frontend/assets/img/banner-5.png')}}" alt="Banner"></a></div>
					<div class="grid_col is-12 is-sm-6 is-lg-3" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="600"><a class="block hover-up" href="/shop"><img class="img-fluid" src="{{url('frontend/assets/img/banner-7.png')}}" alt="Banner"></a></div>
				</div>
			</div>
		</div>
	</div>
		<img class="block mt-30 img-fluid" src="{{url('frontend/assets/img/bg-19.jpg')}}" alt="Newsletter">
	</div>
</body>
</html>
@endsection