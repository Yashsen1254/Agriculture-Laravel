@extends('frontend.layout.main')

@section('content')
<body>
	<!-- Section Slider -->
	<div class="section section-custom-16">
		<!-- Slider Hero -->
		<div class="slider-hero2" data-ntr-slider-hero2>
			<div class="slick-slider">
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/bg-16.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Enjoy Delicious Foods</h1>
								<p class="slider-hero2_item_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Pellentesque fringilla, augue quis commodo eleifend<br>lectus libero condimentum ...</p>
								<p>
									<a class="link is-color-secondary" href="#">
										<span class="link_text">Shop Now</span>
										<span class="link_icon icon is-next"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/bg-17.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Tropical Fruits</h1>
								<p class="slider-hero2_item_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Pellentesque fringilla, augue quis commodo eleifend<br>lectus libero condimentum ...</p>
								<p>
									<a class="link is-color-secondary" href="#">
										<span class="link_text">Shop Now</span>
										<span class="link_icon icon is-next"></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide">
					<div class="slider-hero2_item" data-ntr-background="{{url('frontend/assets/img/bg-18.jpg')}}">
						<div class="container">
							<div class="slider-hero2_item_heading">
								<h1 class="slider-hero2_item_title">Grown with Love</h1>
								<p class="slider-hero2_item_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Pellentesque fringilla, augue quis commodo eleifend<br>lectus libero condimentum ...</p>
								<p>
									<a class="link is-color-secondary" href="#">
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
								<p class="feature_summary">Lorem ipsum dolor sit amet, adipiscing elit.</p>
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
								<p class="feature_summary">Lorem ipsum dolor sit amet, adipiscing elit.</p>
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
								<p class="feature_summary">Lorem ipsum dolor sit amet, adipiscing elit.</p>
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
					<div class="grid_col is-12 is-sm-6" data-aos="ntr-fade-up" data-aos-once="true"><a class="block hover-up" href="#"><img class="img-fluid" src="{{url('frontend/assets/img/banner-4.png')}}" alt="Banner"></a></div>
					<div class="grid_col is-12 is-sm-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200"><a class="block hover-up" href="#"><img class="img-fluid" src="{{url('frontend/assets/img/banner-5.png')}}" alt="Banner"></a></div>
					<div class="grid_col is-12 is-sm-6 is-lg-3" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400"><a class="block hover-up" href="#"><img class="img-fluid" src="{{url('frontend/assets/img/banner-6.png')}}" alt="Banner"></a></div>
					<div class="grid_col is-12 is-sm-6 is-lg-3" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="600"><a class="block hover-up" href="#"><img class="img-fluid" src="{{url('frontend/assets/img/banner-7.png')}}" alt="Banner"></a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Banners End -->
	<!-- Section Featured Products -->
	<div class="section">
		<div class="container">
			<!-- Heading -->
			<div class="heading" data-aos="ntr-fade-up" data-aos-once="true">
				<h2 class="heading_title">Featured Products</h2>
				<p class="heading_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Heading End -->
			<!-- Products -->
			<div class="grid">
				<div class="grid_row is-30 is-md-40">
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-green-light">New</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{url('frontend/assets/img/blank.gif')}}" data-srcset="{{url('frontend/assets/img/product-13-400x400.jpg 1x')}}, {{url('frontend/assets/img/product-13-800x800.jpg 2x')}}" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Lemon</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-red-light">Sale</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{url('frontend/assets/img/blank.gif')}}" data-srcset="{{url('frontend/assets/img/product-12-400x400.jpg 1x')}}, {{url('frontend/assets/img/product-12-800x800.jpg 2x')}}" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Tomato</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-purple-light">Hot</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-11-400x400.jpg 1x, assets/img/product-11-800x800.jpg 2x" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Lettuce</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-green-light">New</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-10-400x400.jpg 1x, assets/img/product-10-800x800.jpg 2x" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Patato</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-green-light">New</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-9-400x400.jpg 1x, assets/img/product-9-800x800.jpg 2x" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Mushroom</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
					<div class="grid_col is-12 is-sm-6 is-lg-4 is-xl-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Product -->
						<div class="shop-product2 hover-shadow">
							<div class="shop-product2_labels">
								<span class="label is-grey">Out of Stock</span>
							</div>
							<div class="shop-product2_photo">
								<a href="shop-single-1.html">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-8-400x400.jpg 1x, assets/img/product-8-800x800.jpg 2x" alt="Product Name"></span>
								</a>
							</div>
							<div class="shop-product2_body">
								<div class="shop-product2_title">
									<a href="shop-single-1.html">Organic D’Anjou Banana</a>
								</div>
								<div class="shop-product2_rating">
									<span class="rating">
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="icon is-star-outline"></span>
										<span class="rating_rate" style="width:80%;">
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
											<span class="icon is-star"></span>
										</span>
									</span>
								</div>
								<div class="shop-product2_prices">
									<span class="shop-product2_prices_old">$14.40</span>
									<span class="shop-product2_prices_current">$12.40</span>
								</div>
							</div>
							<div class="shop-product2_actions">
								<a class="shop-product2_actions_item" href="#" title="Add to Cart"><span class="icon is-bag"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Quick View"><span class="icon is-search"></span></a>
								<a class="shop-product2_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
							</div>
						</div>
						<!-- Product End -->
					</div>
				</div>
			</div>
			<!-- Products End -->
		</div>
	</div>
	<!-- Section Featured Products End -->
	<!-- Section Blog -->
	<div class="section">
		<div class="container">
			<!-- Heading -->
			<div class="heading" data-aos="ntr-fade-up" data-aos-once="true">
				<h2 class="heading_title">Organic Blog</h2>
				<p class="heading_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Heading End -->
		</div>
		<!-- Slider Blog -->
		<div class="slider-blog3" data-ntr-slider-blog3>
			<div class="slick-slider">
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="{{url('frontend/assets/img/blank.gif')}}" data-srcset="assets/img/blog-post-9-400x400.jpg 1x, assets/img/blog-post-9-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Keep the Green Out of the Potato</a></h3>
							<span class="blog-post3_date">April 20, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{url('frontend/assets/img/blank.gif')}}" data-srcset="assets/img/avatar-1-100x100.jpg 1x, assets/img/avatar-1-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Tiana Mcdonnell</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="assets/img/blank.gif" data-srcset="assets/img/blog-post-8-400x400.jpg 1x, assets/img/blog-post-8-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Healthiest Beans and Legumes</a></h3>
							<span class="blog-post3_date">April 19, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-2-100x100.jpg 1x, assets/img/avatar-2-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Terry Figueroa</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="assets/img/blank.gif" data-srcset="assets/img/blog-post-7-400x400.jpg 1x, assets/img/blog-post-7-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Simple and Delicious Keto Salads</a></h3>
							<span class="blog-post3_date">April 18, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-3-100x100.jpg 1x, assets/img/avatar-3-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Kaycee Hess</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="assets/img/blank.gif" data-srcset="assets/img/blog-post-6-400x400.jpg 1x, assets/img/blog-post-6-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Friendly Breakfast Ideas</a></h3>
							<span class="blog-post3_date">April 17, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-1-100x100.jpg 1x, assets/img/avatar-1-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Tiana Mcdonnell</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="assets/img/blank.gif" data-srcset="assets/img/blog-post-5-400x400.jpg 1x, assets/img/blog-post-5-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Drinking Water in the Morning</a></h3>
							<span class="blog-post3_date">April 16, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-2-100x100.jpg 1x, assets/img/avatar-2-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Terry Figueroa</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="assets/img/blank.gif" data-srcset="assets/img/blog-post-4-400x400.jpg 1x, assets/img/blog-post-4-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">Healthiest Vegetables on Earth</a></h3>
							<span class="blog-post3_date">April 15, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-3-100x100.jpg 1x, assets/img/avatar-3-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Kaycee Hess</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
				<div class="slick-slide">
					<!-- Post -->
					<div class="blog-post3">
						<a class="blog-post3_photo" href="blog-single-1.html">
							<img class="lazyload" src="{{url('frontend/assets/img/blank.gif')}}" data-srcset="assets/img/blog-post-3-400x400.jpg 1x, assets/img/blog-post-3-800x800.jpg 2x" alt="Post Title">
						</a>
						<div class="blog-post3_body">
							<h3 class="blog-post3_title"><a href="#">A Healthier Cooking Oil</a></h3>
							<span class="blog-post3_date">April 14, 2019</span>
							<span class="blog-post3_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</span>
							<a class="blog-post3_author" href="#">
								<span class="blog-post3_author_avatar">
									<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/avatar-1-100x100.jpg 1x, assets/img/avatar-1-200x200.jpg 2x" alt="Author Name"></span>
								</span>
								<span class="blog-post3_author_name">Tiana Mcdonnell</span>
							</a>
						</div>
					</div>
					<!-- Post End -->
				</div>
			</div>
		</div>
		<!-- Slider Blog End -->
	</div>
	<!-- Section Blog End -->
	<!-- Section Newsletter -->
	<div class="section mb-0">
		<div class="container">
			<!-- Newsletter 3 -->
			<div class="newsletter3">
				<div class="newsletter3_heading">
					<h2 class="newsletter3_title">Get exclusive offers</h2>
					<p class="newsletter3_text">Lorem ipsum dolor sit amet, consectetur adipiscing phasellus vestibulum fermentum laoreet.</p>
				</div>
				<form class="newsletter3_form">
					<input class="newsletter3_form_input" type="email" name="email" placeholder="Enter your e-mail address ..." required>
					<button class="newsletter3_form_button" type="submit"><span class="icon is-send"></span></button>
				</form>
			</div>
			<!-- Newsletter 3 End -->
		</div>
		<img class="block mt-30 img-fluid" src="{{url('frontend/assets/img/bg-19.jpg')}}" alt="Newsletter">
	</div>
</body>
</html>
@endsection