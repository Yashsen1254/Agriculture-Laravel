@extends('frontend.layout.main')

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Shop</h1>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="/">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">Shop</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Shop -->
	<div class="section">
		<div class="container">
			<div class="grid">
				<div class="grid_row is-40">
					<div class="grid_col is-12" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Header -->
						<div class="shop-header" data-ntr-shop-header>
							<div class="shop-header_views">
								<div class="shop-header_layout">
									<div class="shop-header_layout_item is-active" data-layout="grid-4">
										<span class="shop-header_layout_item_icon icon is-grid"></span>
										<span class="shop-header_layout_item_text">Grid View</span>
									</div>
									<div class="shop-header_layout_item" data-layout="list">
										<span class="shop-header_layout_item_icon icon is-list"></span>
										<span class="shop-header_layout_item_text">List View</span>
									</div>
								</div>
								<div class="shop-header_result"></div>
							</div>
						</div>
						<!-- Header End -->
					</div>
					<div class="grid_col is-12">
						<!-- Products -->
						<div class="shop-products">
							<div class="grid">
								<div class="grid_row is-40">
									@foreach($products as $product)
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{url('uploads/products/'.$product->Image)}}" alt=""></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">{{$product->Name}}</a>
													</div>
													<div class="shop-product_description">
														<p>{{$product->Description}}</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_current">₹{{$product->Price}}</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="{{url('/singleproduct/'.$product->Id)}}" title="Add to Cart"><span class="icon is-cart"></span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
						<!-- Products End -->
						<!-- Pagination -->
						<div class="pagination">
							<div class="pagination_items">
							</div>
						</div>
						<!-- Pagination End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Shop End -->
</body>
</html>
@endsection