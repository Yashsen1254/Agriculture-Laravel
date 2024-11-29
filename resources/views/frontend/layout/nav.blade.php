<!-- Loading -->
	{{-- <div class="loading is-active" data-ntr-loading>
		<span class="loading_loader"></span>
	</div> --}}
	<!-- Loading End -->
	<!-- Back Top -->
	<div class="back-top" data-ntr-backtop>
		<span class="back-top_icon icon is-arrow-up"></span>
	</div>
	<!-- Back Top End -->
	<!-- Header -->
	<div class="header" data-ntr-header>
		<div class="header_holder"></div>
		<div class="header_container">
			<div class="header_search">
				<div class="container">
					<form class="header_search_form">
						<input class="header_search_input" type="text" name="keyword" placeholder="Search ..." required>
						<button class="header_search_button" type="submit"><span class="icon is-search"></span></button>
						<button class="header_search_close" type="button"><span class="icon is-close"></span></button>
					</form>
				</div>
			</div>
			<div class="container">
				<div class="header_bottom">
					<a class="header_logo" href="home-1.html">
						<img src="{{url('frontend/assets/img/logo.png')}}" alt="Naturally">
					</a>
					<nav class="header_nav">
						<a class="header_nav_close" href="#">
							<span class="header_nav_close_text">Close</span>
							<span class="header_nav_close_icon icon is-close"></span>
						</a>
						<ul>
							<li class="has-sub">
								<a href="/">Home</a>
							</li>
							<li class="has-sub">
								<a href="/about">About</a>
							</li>
							<li class="has-sub">
								<a href="/contact">Contact</a>
							</li>
							<li class="has-sub">
								<a href="/shop">Shop</a>
							</li>
							@if(Session::has('Clientid'))
								<li class="has-sub">
									<a href="/logout">Logout</a>
								</li>
							@endif
							<li class="has-sub">
								<a href="/register">Register</a>
							</li>
						</ul>
					</nav>
					<div class="header_nav_toggle">
						<span class="icon is-menu"></span>
					</div>
					<div class="header_cart">
						<div class="header_cart_label">
							<a href="/cart"><span class="header_cart_label_icon icon is-bag"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->