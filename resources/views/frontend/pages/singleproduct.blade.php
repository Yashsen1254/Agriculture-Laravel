@extends('frontend.layout.main');

@section('content')
<body>
	<div class="back-top" data-ntr-backtop>
		<span class="back-top_icon icon is-arrow-up"></span>
	</div>
	<!-- Section Breadcrumb -->
	<div class="section section-custom-8">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="/">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<a class="breadcrumb_link" href="/shop">
					<span class="breadcrumb_link_text">Shop</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">{{$products->Name}}</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Breadcrumb End -->
	<!-- Section Shop Single -->
	<div class="section" data-ntr-shop-single>
		<div class="container">
			<div class="grid">
				<div class="grid_row is-60">
					<div class="grid_col is-12 is-lg-5">
						<div class="shop-single_photos" data-ntr-lightbox='{"type":"gallery","selector":".shop-single_photos_item"}'>
							<div class="slick-slider">
								<div class="slick-slide">
										<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{url('uploads/products/'.$products->Image)}}" data-srcset="" alt="Product Name"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_col is-12 is-lg-7">
						<div class="shop-single_title">
							<h2>{{$products->Name}}</h2>
						</div>
						<div class="shop-single_price">
							<span class="shop-single_price_current">{{$products->Price}}</span>
						</div>
						<div class="shop-single_description">
							<p>{{$products->Description}}</p>
						</div>
						<form class="shop-single_quantity" method="POST" action="{{url('/cart/store')}}">
							@csrf
							<input type="hidden" name="Productid" id="Productid" value="{{ $products->Id }}">
							<div class="quantity-wrapper">
								<input type="number" name="Quantity" id="Quantity" value="1" min="1" max="50" class="quantity-input">
								@if(Session::has('Clientid'))
									<button type="submit" class="button is-grey">
										<span class="button_text">Add to Cart</span>
										<span class="button_icon icon is-cart"></span>
									</button>
								@else
									<a href="{{ route('front.register') }}" class="button is-grey">
										<span class="button_text">Add To Cart</span>
										<span class="button_icon icon is-cart"></span>
									</a>
								@endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

@endsection