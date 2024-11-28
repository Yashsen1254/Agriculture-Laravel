@extends('frontend.layout.main')

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section text-center">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">Contact us</h1>
				<p class="headline_summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="home-1.html">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">Contact us</span>
			</div>
			<!-- Breadcrumb End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Contact -->
	<div class="section section-custom-7">
		<div class="container">
			<div class="grid">
				<div class="grid_row is-60">
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true">
						<div class="grid">
							<div class="grid_row is-60 is-lg-30">
								<div class="grid_col is-12">
									<h3 class="lg-mt-60 mb-0 text-secondary">Contact Information</h3>
									<p>Lorem ipsum dolor sit amet consectetur.</p>
								</div>
								<div class="grid_col is-12 is-sm-6">
									<h4>Address</h4>
									<p>241 Devonshire Street Lebanon, PA 17042</p>
								</div>
								<div class="grid_col is-12 is-sm-6">
									<h4>Phone</h4>
									<p>+1-800-123-45-67<br>+1-800-123-45-68</p>
								</div>
								<div class="grid_col is-12 is-sm-6">
									<h4>E-mail</h4>
									<p><a href="mailto:sales@naturally.com">sales@naturally.com</a><br><a href="mailto:help@naturally.com">help@naturally.com</a></p>
								</div>
								<div class="grid_col is-12 is-sm-6">
									<h4>Working hours</h4>
									<p>Monday 09:00 AM<br>Friday 05:00 PM</p>
								</div>
								<div class="grid_col is-12">
									<h3 class="mb-0 text-secondary">Follow us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="grid_col is-12">
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
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Contact Form 2 -->
						<div class="contact-form2">
							<div class="contact-form2_heading">
								<h3>Contact Form</h3>
								<p>Lorem ipsum dolor sit amet consectetur.</p>
							</div>
							<div class="contact-form2_body">
								<form data-ntr-contact-form>
									<div class="grid">
										<div class="grid_row is-30">
											<div class="grid_col is-12 hidden" id="form-message">
												<!-- Alert -->
												<div class="alert" data-ntr-alert>
													<button class="alert_close" type="button">
														<span class="icon is-close"></span>
													</button>
												</div>
												<!-- Alert End -->
											</div>
											<div class="grid_col is-12">
												<label class="form_label">Name Surname <span class="form_label_require">*</span></label>
												<input class="form_control_input" type="text" name="name" placeholder="Enter your name ..." required>
											</div>
											<div class="grid_col is-12">
												<label class="form_label">Email Address <span class="form_label_require">*</span></label>
												<input class="form_control_input" type="email" name="email" placeholder="Enter your email ..." required>
											</div>
											<div class="grid_col is-12">
												<label class="form_label">Message <span class="form_label_require">*</span></label>
												<textarea class="form_control_textarea" cols="30" rows="10" name="message" placeholder="Enter your message ..." required></textarea>
											</div>
											<div class="grid_col is-12">
												<button class="button is-block is-grey" type="submit">
													<span class="button_text">Send Form</span>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Contact Form 2 End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Contact End -->
</body>
</html>
@endsection