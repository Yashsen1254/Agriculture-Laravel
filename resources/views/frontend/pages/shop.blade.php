@extends('frontend.layout.main')

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Shop</h1>
				<p class="headline_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="home-1.html">
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
								<div class="shop-header_result">Showing <span>1–12</span> of <span>126</span> results</div>
							</div>
							<div class="shop-header_selects">
								<div class="shop-header_select">
									<span>Sort by</span>
									<select class="form_control_select" name="orderby">
										<option value="popularity">Popularity</option>
										<option value="rating">Average rating</option>
										<option value="date" selected>Newness</option>
										<option value="price">Price: low to high</option>
										<option value="price-desc">Price: high to low</option>
									</select>
								</div>
								<div class="shop-header_select">
									<span>Show</span>
									<select class="form_control_select" name="showLimit">
										<option value="12" selected>12</option>
										<option value="24">24</option>
										<option value="48">48</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Header End -->
					</div>
					<div class="grid_col is-12">
						<!-- Products -->
						<div class="shop-products">
							<div class="grid">
								<div class="grid_row is-40">
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_labels">
												<span class="label is-green-light">New</span>
											</div>
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-13-400x400.jpg 1x, assets/img/product-13-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Lemon</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_labels">
												<span class="label is-red-light">Sale</span>
											</div>
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-12-400x400.jpg 1x, assets/img/product-12-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Tomato</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-11-400x400.jpg 1x, assets/img/product-11-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Lettuce</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="600">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_labels">
												<span class="label is-purple-light">Hot</span>
											</div>
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-10-400x400.jpg 1x, assets/img/product-10-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Patato</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-9-400x400.jpg 1x, assets/img/product-9-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Mushroom</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-8-400x400.jpg 1x, assets/img/product-8-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Banana</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-7-400x400.jpg 1x, assets/img/product-7-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Apple</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="600">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_labels">
												<span class="label is-grey">Out of Stock</span>
											</div>
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-6-400x400.jpg 1x, assets/img/product-6-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Bean</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-5-400x400.jpg 1x, assets/img/product-5-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Carrot</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-4-400x400.jpg 1x, assets/img/product-4-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Corn</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-3-400x400.jpg 1x, assets/img/product-3-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Grape</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
									<div class="grid_col" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="600">
										<!-- Product -->
										<div class="shop-product hover-shadow">
											<div class="shop-product_photo">
												<a href="shop-single-1.html">
													<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-2-400x400.jpg 1x, assets/img/product-2-800x800.jpg 2x" alt="Product Name"></span>
												</a>
											</div>
											<div class="shop-product_content">
												<div class="shop-product_body">
													<div class="shop-product_title">
														<a href="shop-single-1.html">Organic Cherry</a>
													</div>
													<div class="shop-product_rating">
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
													<div class="shop-product_description">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et sapien velit. Quisque id sagittis odio. In pulvinar ex vitae viverra aliquam.</p>
													</div>
												</div>
												<div class="shop-product_footer">
													<div class="shop-product_prices">
														<span class="shop-product_prices_old">$14.40</span>
														<span class="shop-product_prices_current">$12.40</span>
													</div>
													<div class="shop-product_actions">
														<a class="shop-product_actions_item" href="#" title="Add to Cart"><span class="icon is-cart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Quick View"><span class="icon is-view"></span></a>
														<a class="shop-product_actions_item" href="#" title="Add to Wishlist"><span class="icon is-heart"></span></a>
														<a class="shop-product_actions_item" href="#" title="Compare"><span class="icon is-exchange"></span></a>
													</div>
												</div>
											</div>
										</div>
										<!-- Product End -->
									</div>
								</div>
							</div>
						</div>
						<!-- Products End -->
						<!-- Pagination -->
						<div class="pagination">
							<div class="pagination_items">
								<a class="pagination_item" href="#"><span class="icon is-back"></span></a>
								<a class="pagination_item" href="#">1</a>
								<a class="pagination_item is-active" href="#">2</a>
								<a class="pagination_item" href="#">3</a>
								<a class="pagination_item" href="#">4</a>
								<a class="pagination_item" href="#">5</a>
								<a class="pagination_item" href="#"><span class="icon is-next"></span></a>
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