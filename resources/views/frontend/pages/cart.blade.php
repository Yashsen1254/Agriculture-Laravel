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
							
							@foreach($carts as $cart)
								@if($cart->Clientid == session('Clientid') && $cart->isdeleted != 1)								
								<tr>
									<td class="is-photo">
										<a href="/singleproduct/{{$cart->Productid}}">
											<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{asset('uploads/products/'.$cart->Image)}}" alt="{{$cart->Name}}"></span>
										</a>
									</td>
									<td class="is-name">
										<a href="/singleproduct/{{$cart->Productid}}">{{$cart->Name}}</a>
									</td>
									<td class="is-price">${{$cart->Price}}</td>
									<td class="is-qty">
										<input type="text" name="quantity" value="{{$cart->Quantity}}" data-ntr-ui-spinner='{"min":1, "max":50}'>
									</td>
									<td class="is-total">${{$cart->Price * $cart->Quantity}}</td>
									<td class="is-remove">
										<a class="button is-small is-grey" href="/cart/delete/{{$cart->Id}}">
											<span class="button_icon icon is-delete"></span>
										</a>
									</td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
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
								<td>Total :</td>
								<td class="text-primary">${{ $carts->reject(function($cart) { return $cart->isdeleted == 1; })->sum(function($cart) { return $cart->Price * $cart->Quantity; }) }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<a class="button is-grey" href="/checkout">
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