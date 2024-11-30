@extends('frontend.layout.main');

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Checkout</h1>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="home-1.html">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">Checkout</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Checkout -->
	<div class="section">
		<div class="container">
			<div class="shop-checkout" data-ntr-shop-checkout>
				{{-- <form class="shop-checkout_form" action="{{ url('/checkout/store') }}" method="POST">
					@csrf
					<div class="grid">
						<div class="grid_row is-60">
							<div class="grid_col is-12 is-lg-6">
								<div class="grid">
									<div class="grid_row is-30">
										<div class="grid_col is-12">
											<h3 class="shop-checkout_title">Billing details</h3>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Name <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="Name" id="Name" placeholder="Enter Name ..." required>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Mobile <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="number" name="Mobile" id="Mobile" placeholder="Enter Mobile No ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Email <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="email" name="Email" id="Email" placeholder="Enter Email ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Address<span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="Address" id="Address" placeholder="Enter Address ..." required>
										</div>
									</div>
								</div>
							</div>
							<div class="grid_col is-12 is-lg-6">
								<h3 class="shop-checkout_title">Your order</h3>
								<table class="shop-checkout_products">
									<tbody>
										@foreach($carts->where('Clientid', session('Clientid')) as $cart)
											<input type="text" name="Cartid" value="{{ $cart->Id }}">
										<tr class="shop-checkout_products_item">
											<td>
												<a class="shop-checkout_products_item_name" href="shop-single-1.html">{{ $cart->Name }}</a> x {{$cart->Quantity }}
											</td>
											<td class="text-right">{{ $cart->Price }}</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr>
											<td>Total</td>
											<td class="text-right text-secondary">
												{{ $carts->where('Clientid', session('Clientid'))->sum(function($cart) { return $cart->Price * $cart->Quantity; }) }}
											</td>
										</tr>
									</tfoot>
								</table>
								<div class="shop-checkout_order">
									<div class="shop-checkout_order_button">
										<button class="button is-grey" type="submit" name="order">
											<span class="button_text">Place order</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form> --}}
				<form class="shop-checkout_form" action="{{ url('/checkout/store') }}" method="POST">
					@csrf
					<div class="grid">
						<div class="grid_row is-60">
							<div class="grid_col is-12 is-lg-6">
								<div class="grid">
									<div class="grid_row is-30">
										<div class="grid_col is-12">
											<h3 class="shop-checkout_title">Billing details</h3>
										</div>
										@foreach($carts->where('Clientid', session('Clientid')) as $cart)
											<input type="hidden" name="Cartid" value="{{ $cart->Id }}">
										@endforeach
										<input type="hidden" name="Totalquantity" value="{{ $cart->Quantity }}">
										<input type="hidden" name="Status" value="PENDING">
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Name <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="Name" id="Name" placeholder="Enter Name ..." required>
										</div>
										<div class="grid_col is-12 is-sm-6">
											<label class="form_label">Mobile <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="number" name="Mobile" id="Mobile" placeholder="Enter Mobile No ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Email <span class="form_label_require">*</span></label>
											<input class="form_control_input" type="email" name="Email" id="Email" placeholder="Enter Email ..." required>
										</div>
										<div class="grid_col is-12">
											<label class="form_label">Address<span class="form_label_require">*</span></label>
											<input class="form_control_input" type="text" name="Address" id="Address" placeholder="Enter Address ..." required>
										</div>
									</div>
								</div>
							</div>
							<div class="grid_col is-12 is-lg-6">
								<h3 class="shop-checkout_title">Your order</h3>
								<table class="shop-checkout_products">
									<tbody>
										@foreach($products as $product)
											<tr class="shop-checkout_products_item">
												<td>
													<a class="shop-checkout_products_item_name" href="shop-single-1.html">{{ $product->Name }}</a>
												</td>
												<td class="text-right">{{ $product->Price }}</td>
											</tr>
										@endforeach
									</tbody>
									<tfoot>
										<tr>
											<td>Total</td>
											<td class="text-right text-secondary">
												{{ $products->sum('Price') * $carts->sum('Quantity') }}
											</td>
										</tr>
									</tfoot>
								</table>
								<div class="shop-checkout_order">
									<div class="shop-checkout_order_button">
										<button class="button is-grey" type="submit" name="order">
											<span class="button_text">Place order</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Section Checkout End -->
</body>
</html>
@endsection