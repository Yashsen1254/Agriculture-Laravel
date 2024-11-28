@extends('frontend.layout.main');

@section('content')
</head>
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Shopping Cart</h1>
				<p class="headline_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="home-1.html">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">Shopping Cart</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Cart -->
	<div class="section">
		<div class="container">
			<form class="shop-cart">
				<div class="shop-cart_table">
					<table>
						<thead>
							<tr>
								<th class="is-photo">Photo</th>
								<th class="is-name">Product</th>
								<th class="is-price">Price</th>
								<th class="is-qty">Quantity</th>
								<th class="is-total">Total</th>
								<th class="is-remove">Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="is-photo">
									<a href="shop-single-1.html">
										<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-13-100x100.jpg 1x, assets/img/product-13-200x200.jpg 2x" alt="Product Name"></span>
									</a>
								</td>
								<td class="is-name">
									<a href="shop-single-1.html">Organic D'Anjou Lemon</a>
									<p class="mt-5">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</p>
								</td>
								<td class="is-price">$6.40</td>
								<td class="is-qty">
									<input type="text" name="product-1-qty" value="1" data-ntr-ui-spinner='{"min":1, "max":50}'>
								</td>
								<td class="is-total">$6.40</td>
								<td class="is-remove">
									<a class="button is-small is-grey" href="#">
										<span class="button_icon icon is-delete"></span>
									</a>
								</td>
							</tr>
							<tr>
								<td class="is-photo">
									<a href="shop-single-1.html">
										<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-12-100x100.jpg 1x, assets/img/product-12-200x200.jpg 2x" alt="Product Name"></span>
									</a>
								</td>
								<td class="is-name">
									<a href="shop-single-1.html">Organic D'Anjou Tomato</a>
									<p class="mt-5">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</p>
								</td>
								<td class="is-price">$7.20</td>
								<td class="is-qty">
									<input type="text" name="product-2-qty" value="1" data-ntr-ui-spinner='{"min":1, "max":50}'>
								</td>
								<td class="is-total">$7.20</td>
								<td class="is-remove">
									<a class="button is-small is-grey" href="#">
										<span class="button_icon icon is-delete"></span>
									</a>
								</td>
							</tr>
							<tr>
								<td class="is-photo">
									<a href="shop-single-1.html">
										<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="assets/img/blank.gif" data-srcset="assets/img/product-11-100x100.jpg 1x, assets/img/product-11-200x200.jpg 2x" alt="Product Name"></span>
									</a>
								</td>
								<td class="is-name">
									<a href="shop-single-1.html">Organic D'Anjou Lettuce</a>
									<p class="mt-5">Weight: 1kg, Dimensions: 10 × 10 × 30 cm</p>
								</td>
								<td class="is-price">$8.10</td>
								<td class="is-qty">
									<input type="text" name="product-3-qty" value="1" data-ntr-ui-spinner='{"min":1, "max":50}'>
								</td>
								<td class="is-total">$8.10</td>
								<td class="is-remove">
									<a class="button is-small is-grey" href="#">
										<span class="button_icon icon is-delete"></span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="shop-cart_bottom">
					<div class="shop-cart_coupon">
						<input class="form_control_input" type="text" name="coupon_code" placeholder="Enter coupon code ...">
						<button class="button is-grey" type="submit" name="apply_coupon">
							<span class="button_text">Apply Coupon</span>
						</button>
					</div>
					<div class="shop-cart_update">
						<button class="button is-grey" type="submit" name="update_cart">
							<span class="button_text">Update Cart</span>
						</button>
					</div>
				</div>
				<div class="shop-cart_totals">
					<table class="shop-cart_totals_table">
						<tbody>
							<tr>
								<td colspan="2">
									<h3 class="text-secondary">Cart Totals</h3>
								</td>
							</tr>
							<tr>
								<td>Subtotal :</td>
								<td class="text-primary">$21.70</td>
							</tr>
							<tr>
								<td>Shipping :</td>
								<td class="text-primary">$10.00</td>
							</tr>
							<tr>
								<td>Tax :</td>
								<td class="text-primary">$0.00</td>
							</tr>
							<tr>
								<td>Total :</td>
								<td class="text-primary">$31.70</td>
							</tr>
							<tr>
								<td colspan="2">
									<a class="button is-grey" href="#">
										<span class="button_text">Proceed to Checkout</span>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
	<!-- Section Cart End -->
</body>
</html>
@endsection