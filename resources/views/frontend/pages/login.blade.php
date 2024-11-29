<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="naturally, organic, organic foods">
	<meta name="description" content="Organic Food &amp; Agriculture HTML Template">
	<title>Naturally - Organic Food &amp; Agriculture HTML Template</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{url('frontend/assets/img/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{url('frontend/assets/img/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{url('frontend/assets/img/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{url('frontend/assets/img/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{url('frontend/assets/img/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/assets/img/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{url('frontend/assets/img/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/assets/img/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/img/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{url('frontend/assets/img/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/assets/img/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{url('frontend/assets/img/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/img/favicon-16x16.png')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{url('frontend/assets/img/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
	<!-- Css -->
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/jquery-ui/jquery-ui.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/jquery.magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/slick/slick.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/vendors/aos.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('frontend/assets/css/custom.css')}}">
</head>
<body>
	<div class="back-top" data-ntr-backtop>
		<span class="back-top_icon icon is-arrow-up"></span>
	</div>
	<!-- Back Top End -->
	<!-- Header End -->
	<!-- Section Login -->
	<div class="section section-login">
		<div class="container">
			<div class="grid">
				<div class="grid_row">
					<div class="grid_col is-12 is-lg-6">
						<form action="{{url('/login/store')}}" method="POST">
							@csrf
							<div class="grid">
								<div class="grid_row is-30 is-md-40">
									<div class="grid_col is-12">
										<h3 class="text-secondary">Login to Naturally</h3>
									</div>
									<div class="grid_col is-12">
										<label class="form_label">Email address <span class="form_label_require">*</span></label>
										<input class="form_control_input" type="text" name="Email" id="Email" placeholder="Enter your email ..." required>
									</div>
									<div class="grid_col is-12">
										<label class="form_label">Password <span class="form_label_require">*</span></label>
										<input class="form_control_input" type="password" name="Password" id="Password" placeholder="Enter your password ..." required>
									</div>
									<div class="grid_col is-12">
										<div class="grid">
											<div class="grid_row is-30 is-md-40">
												<div class="grid_col is-12 is-sm-6">
													<label class="form_check"><input class="form_control_checkbox" type="checkbox" name="remember" checked>Remember me</label>
												</div>
												<div class="grid_col is-12 is-sm-6 sm-text-right">
													<a href="forgot-password-1.html" class="text-secondary">Forgot password ?</a>
												</div>
											</div>
										</div>
									</div>
									<div class="grid_col is-12">
										<div class="grid">
											<div class="grid_row is-30 is-md-40">
												<div class="grid_col is-12 is-sm-6">
													<button class="button is-block is-grey" type="submit">
														<span class="button_text">Login</span>
														<span class="button_icon icon is-next"></span>
													</button>
												</div>
												<div class="grid_col is-12 is-sm-6">
													<a class="button is-block is-grey" href="register-1.html">
														<span class="button_text">Create account</span>
														<span class="button_icon icon is-next"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Login End -->
	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="footer_top">
				<div class="grid">
					<div class="grid_row is-40 is-lg-60">
						<div class="grid_col is-12 is-lg-6 is-xl-4">
							<div class="footer_about">
								<div class="footer_about_logo">
									<img src="assets/img/logo.png" alt="Naturally">
								</div>
								<div class="footer_about_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec nisi ac turpis laoreet auctor sed sed turpis.</p>
								</div>
							</div>
							<div class="footer_contact">
								<div class="footer_contact_item">
									<h3>Address</h3>
									<p>241 Devonshire Street Lebanon, PA 17042</p>
								</div>
								<div class="footer_contact_item">
									<h3>Phone</h3>
									<p>+1-800-123-45-67</p>
								</div>
								<div class="footer_contact_item">
									<h3>Email</h3>
									<p><a href="mailto:sales@naturally.com">sales@naturally.com</a></p>
								</div>
							</div>
						</div>
						<div class="grid_col is-12 is-lg-6 is-xl-4 is-offset-xl-4">
							<div class="footer_newsletter">
								<h3>Sign Up &amp; Save</h3>
								<p>Get exclusive offers, free shipping events & more by signing up for our promotional emails.</p>
								<form class="footer_newsletter_form">
									<input class="footer_newsletter_form_input" type="email" name="email" placeholder="Enter your e-mail address ..." required>
									<button class="footer_newsletter_form_button" type="submit"><span class="icon is-send"></span></button>
								</form>
							</div>
							<div class="footer_social">
								<h3>Follow us</h3>
								<div class="social-icons">
									<a class="social-icons_link" href="#" target="_blank"><span class="icon is-facebook"></span></a>
									<a class="social-icons_link" href="#" target="_blank"><span class="icon is-twitter"></span></a>
									<a class="social-icons_link" href="#" target="_blank"><span class="icon is-instagram"></span></a>
									<a class="social-icons_link" href="#" target="_blank"><span class="icon is-youtube"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>