@extends('frontend.layout.main');

@section('content')
<body>
	<!-- Section Headline -->
	<div class="section section-custom-5">
		<div class="container">
			<!-- Headline -->
			<div class="headline">
				<h1 class="headline_title">About us</h1>
			</div>
			<!-- Headline End -->
			<!-- Breadcrumb -->
			<div class="breadcrumb">
				<a class="breadcrumb_link" href="/">
					<span class="breadcrumb_link_text">Home</span>
					<span class="breadcrumb_link_icon icon is-arrow-right2"></span>
				</a>
				<span class="breadcrumb_active">About us</span>
			</div>
			<!-- Breadcrumb End -->
			<!-- Photo -->
			<div class="mt-30">
				<img src="{{url('frontend/assets/img/bg-11.jpg')}}" alt="About us">
			</div>
			<!-- Photo End -->
		</div>
	</div>
	<!-- Section Headline End -->
	<!-- Section Text -->
	<div class="section">
		<div class="container">
			<div class="grid">
				<div class="grid_row is-60 is-xl-120">
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true">
						<h3>Our mission</h3>
						<p>Empowering farmers and growers with effective, safe, and sustainable pest control solutions to protect crops, enhance productivity, and support a healthier agricultural future.</p>
					</div>
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<h3>Our vision</h3>
						<p>To be a trusted leader in the agricultural industry by providing innovative, eco-friendly pest control solutions that ensure food security, promote sustainable farming, and foster environmental stewardship worldwide</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Section Text End -->
	<!-- Section Values -->
	<div class="section">
		<div class="container">
			<!-- Heading -->
			<div class="heading" data-aos="ntr-fade-up" data-aos-once="true">
				<h2 class="heading_title">Our Values</h2>
			</div>
			<!-- Heading End -->
			<!-- Values -->
			<div class="grid">
				<div class="grid_row is-60 is-xl-120">
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true">
						<h3 class="text-secondary">Talented people</h3>
						<p>We believe our strength lies in our team of skilled and passionate professionals, dedicated to delivering innovative and effective solutions for modern agriculture.</p>
					</div>
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<h3 class="text-secondary">Client-centric mindset</h3>
						<p>Our customers are at the heart of everything we do. We strive to understand their unique needs and provide tailored solutions to help them thrive</p>
					</div>
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true">
						<h3 class="text-secondary">Thinking out-of-the-box</h3>
						<p>Innovation drives us forward. We challenge conventional methods to develop cutting-edge solutions that address complex agricultural challenges.</p>
					</div>
					<div class="grid_col is-12 is-lg-6" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<h3 class="text-secondary">Sustainable development</h3>
						<p>We are committed to promoting environmentally friendly practices that ensure long-term agricultural productivity and preserve the planet for future generations.</p>
					</div>
				</div>
			</div>
			<!-- Values End -->
		</div>
	</div>
	<!-- Section Values End -->
	<!-- Section Counters -->
	<div class="section">
		<div class="container">
			<!-- Heading -->
			<div class="heading" data-aos="ntr-fade-up" data-aos-once="true">
				<h2 class="heading_title">Numbers</h2>
			</div>
			<!-- Heading End -->
			<!-- Counters -->
			<div class="grid">
				<div class="grid_row is-60 is-lg-120">
					<div class="grid_col is-12 is-md-4" data-aos="ntr-fade-up" data-aos-once="true">
						<!-- Counter -->
						<div class="counter" data-ntr-counter='{"from":0, "to":276, "speed":5000, "refreshInterval":100}'>
							<div class="counter_number">276</div>
							<div class="counter_title">Skilled<br>Professionals</div>
						</div>
						<!-- Counter End -->
					</div>
					<div class="grid_col is-12 is-md-4" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="200">
						<!-- Counter -->
						<div class="counter" data-ntr-counter='{"from":0, "to":37428, "speed":5000, "refreshInterval":100}'>
							<div class="counter_number">37428</div>
							<div class="counter_title">Happy<br>Customers</div>
						</div>
						<!-- Counter End -->
					</div>
					<div class="grid_col is-12 is-md-4" data-aos="ntr-fade-up" data-aos-once="true" data-aos-delay="400">
						<!-- Counter -->
						<div class="counter" data-ntr-counter='{"from":0, "to":45861, "speed":5000, "refreshInterval":100}'>
							<div class="counter_number">45861</div>
							<div class="counter_title">Orders<br>Delivered</div>
						</div>
						<!-- Counter End -->
					</div>
				</div>
			</div>
			<!-- Counters End -->
		</div>
	</div>
	<!-- Section Counters End -->
</body>
</html>
@endsection