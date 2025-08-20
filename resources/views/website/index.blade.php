@extends('website.layout.master')

@section('title', 'Hasthmelap | Home')

@section('content')
<section id="center" class="center_home">
	<div class="center_m bg_back">
		<div class="container-xl">
			<div class="row center_home1 text-center">
				<div class="center_home1_left text-center">
					<h1 class="font_50 text-white">Find Your Life Partner</h1>
			        <b class="text-white">Finding your perfect match just became easier</b>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section id="exep" class="pt-4 pb-5">
	<div class="container-xl">
		<div class="exep_m bg-white p-4 shadow">
			<div class="row exep_1 mb-4">
				<div class="col-md-12">
					<span class="text-uppercase text-muted d-block">More Than 25 years of</span>
					<b class="d-block fs-3 mt-2">Bringing People <span class="text_theme">Together</span></b>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-3 exep_2">
				<div class="col">
					<div class="exep_2_left">
						<span class="font_50 text_theme"><i class="bi bi-person-circle
"></i></span>
						<b class="d-block">100% Screened Profiles</b>
						<hr class="line">
						<p class="mb-0">We ensure that every profile goes through a strict verification process, giving you genuine and trustworthy matches.</p>
					</div>
				</div>
				<div class="col">
					<div class="exep_2_left">
						<span class="font_50 text_theme"><i class="bi bi-shield-check
"></i></span>
						<b class="d-block">Verifications by Personal Visit</b>
						<hr class="line">
						<p class="mb-0">Our dedicated team personally visits and verifies profiles to maintain authenticity and transparency.</p>
					</div>
				</div>
				<div class="col">
					<div class="exep_2_left">
						<span class="font_50 text_theme"><i class="bi bi-lock
"></i></span>
						<b class="d-block">Control over Privacy</b>
						<hr class="line">
						<p class="mb-0">Your personal information stays safe with us. You decide what details to share and with whom.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="meet" class="pt-5 pb-5 bg_light">
	<div class="container-xl">
		<div class="row exep_1 mb-4">
			<div class="col-md-12">
				<span class="text-uppercase text-muted d-block">Meet from home</span>
				<b class="d-block fs-3 mt-2">Impress them Over the <span class="text_theme">Distance</span></b>
			</div>
		</div>
		<div class="row  meet_1">
			<div class="col-md-7">
				<div class="meet_1_left">
					<b class="d-block fs-5">Matchmaking Hour</b>
					<hr class="line">
					<p class="mb-0 w-75">Join our dedicated online matchmaking hour where verified profiles interact, making it easier to connect with your perfect match from the comfort of your home.</p>
					<b class="d-block fs-5 mt-4">Verified & Trusted Profiles</b>
					<hr class="line">
					<p class="mb-0 w-75">Every profile is carefully verified to ensure authenticity, giving you a safe and reliable platform to find your life partner.</p>
					<b class="d-block fs-5 mt-4">Smart Match Suggestions</b>
					<hr class="line">
					<p class="mb-0 w-75">Get personalized match recommendations based on your preferences, helping you save time and connect faster with the right person.</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="meet_1_right">
					<div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
							<button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 3" class=""></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active" style="height: 450px;">
								<img src="image/happy_couple.jfif" style="height: 100%" class="img-fluid" alt="abc">
							</div>
							<div class="carousel-item" style="height: 450px;">
								<img src="image/family_interaction.jpg" style="height: 100%" class="img-fluid" alt="abc">
							</div>
							<div class="carousel-item" style="height: 450px;">
								<img src="image/match.jfif" style="height: 100%;" class="img-fluid" alt="abc">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="find" class="pt-5 pb-5">
	<div class="container-xl">
		<div class="row exep_1 mb-4" style=" max-height: 220px; object-fit: contain;">
			<div class="col-md-12">
				<span class="text-uppercase text-muted d-block">Three simple steps to</span>
				<b class="d-block fs-3 mt-2">Find the <span class="text_theme">One for You</span></b>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-3 find_1">
			<div class="col mt-4">
				<div class="find_1_left" style="height: 220px;">
					<a href="#"><img src="image/preferences.jfif" style="height: 100%;" class="img-fluid" alt="abc"></a>
					<b class="d-block d-flex"><span class="text_theme me-1">01.</span> Define Your Partner Preferences</b>
				</div>
			</div>
			<div class="col  mt-4">
				<div class="find_1_left" style="height: 220px;">
					<a href="#"><img src="image/browse_profiles.jfif" style="height: 100%;" class="img-fluid" alt="abc"></a>
					<b class="d-block d-flex"><span class="text_theme me-1">02.</span> Browse Profiles</b>
				</div>
			</div>
			<div class="col mt-4">
				<div class="find_1_left" style="height: 220px;">
					<a href="#"><img src="image/get_connected.jfif" style="height: 100%;" class="img-fluid" alt="abc"></a>
					<b class="d-block d-flex"><span class="text_theme me-1">03.</span> Show Interest & Get Connected</b>
				</div>
			</div>
		</div>
		<div class="row find_2 text-center mt-4">
			<div class="col-md-12">
				<span class="d-block mt-5 text-center"><a class="button bg_theme" href="{{route('gallery')}}">Get Started</a></span>
			</div>
		</div>
	</div>
</section>

<section id="match" class="pt-5 pb-5 bg_light">
	<div class="container-xl">
		<div class="row exep_1 mb-4 text-center">
			<div class="col-12">
				<span class="text-uppercase text-muted d-block">PERSONALISED MATCH-MAKING SERVICE</span>
				<b class="d-block fs-3 mt-2 mb-3">Introducing <span class="text_theme">Exclusive</span></b>
				<div class="news_1_left2_inner position-relative mx-auto" style="max-width: 500px;">
					<!-- Image -->
					<div class="news_1_left2_inner1">
						<a href="#">
							<img src="image/exclusive_couple.jpg" class="img-fluid w-100 rounded-3" alt="abc">
						</a>
					</div>
					<!-- Overlay Text -->
					<div class="news_1_left2_inner2 position-absolute bottom-0 px-3 py-3 bg_back w-100">
						<b class="d-block fs-5 mb-2 text-white">Your Personalised <span class="text_theme">Matchmaking</span> Service</b>
						<p class="text-light mb-0" style="font-size: 14px;">
							With Exclusive, you get a dedicated Relationship Manager who understands your preferences and guides you in finding the most suitable partner.
							Every profile is carefully handpicked to match your expectations, ensuring a truly personalised matchmaking journey.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- 3 Steps -->
		<div class="row row-cols-1 row-cols-md-3 g-4 match_1 w-100 mx-auto mt-4">
			<div class="col">
				<div class="match_1_left text-center text-md-start">
					<b class="d-flex align-items-center justify-content-center justify-content-md-start">
						<i class="bi bi-person-circle me-2 fs-5 text_theme"></i> Meet Your Relationship Manager
					</b>
					<hr class="line">
					<p class="mb-0">A dedicated expert who manages your profile.</p>
				</div>
			</div>
			<div class="col">
				<div class="match_1_left text-center text-md-start">
					<b class="d-flex align-items-center justify-content-center justify-content-md-start">
						<i class="bi bi-sliders2 me-2 fs-5 text_theme"></i> Understand Your Expectations
					</b>
					<hr class="line">
					<p class="mb-0">One-to-one consultation to know your preferences.</p>
				</div>
			</div>
			<div class="col">
				<div class="match_1_left text-center text-md-start">
					<b class="d-flex align-items-center justify-content-center justify-content-md-start">
						<i class="bi bi-person-check me-2 fs-5 text_theme"></i> Choose from Handpicked Profiles
					</b>
					<hr class="line">
					<p class="mb-0">Get shortlisted matches tailored just for you.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="couple" class="pt-5 pb-5">
	<div class="container-xl">
		<div class="row exep_1 mb-4">
			<div class="col-md-12">
				<span class="text-uppercase text-muted d-block">Hundreds OF HAPPY COUPLES</span>
				<b class="d-block fs-3 mt-2">Matched by <span class="text_theme">Hasthmelap</span></b>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-3 couple_1">
			<div class="col">
				<div class="couple_1_left position-relative">
					<div class="couple_1_left1" style="height: 250px; width: 355px">
						<a href="#"><img src="image/wedding1.jpg" style="height: 100%; width: 100%;" class="img-fluid" alt="abc"></a>
					</div>
					<div class="couple_1_left2 position-absolute  bg_back w-100 h-100 px-3 text-center top-0">
						<b class="fst-italic d-block fs-3 text-white">Rahul & Sneha </b>
						<hr class="bg-white w-100 line_1 mt-1 mb-1">
						<span class="font_13 text-uppercase text-white">Marriage Date 08 March 2025</span>
					</div>
					<div class="couple_1_left3 position-absolute top-0 bg_back w-100 h-100 p-3">
						<p class="mb-0 text-white">Finding love through Hasthmelap – Happy forever!.</p>
						<span class="d-block mt-3"><a class="button bg_theme" href="#">View More <i class="bi bi-arrow-right ms-2"></i></a></span>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="couple_1_left position-relative">
					<div class="couple_1_left1" style="height: 250px; width: 355px">
						<a href="#"><img src="image/wedding2.jpg" style="height: 100%; width: 100%;" class="img-fluid" alt="abc"></a>
					</div>
					<div class="couple_1_left2 position-absolute  bg_back w-100 h-100 px-3 text-center top-0">
						<b class="fst-italic d-block fs-3 text-white">Arjun & Meera</b>
						<hr class="bg-white w-100 line_1 mt-1 mb-1">
						<span class="font_13 text-uppercase text-white">Marriage Date 11 March 2025</span>
					</div>
					<div class="couple_1_left3 position-absolute top-0 bg_back w-100 h-100 p-3">
						<p class="mb-0 text-white">Handpicked matches that truly clicked..</p>
						<span class="d-block mt-3"><a class="button bg_theme" href="#">View More <i class="bi bi-arrow-right ms-2"></i></a></span>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="couple_1_left position-relative">
					<div class="couple_1_left1" style="height: 250px; width: 355px">
						<a href="#"><img src="image/wedding3.avif" style="height: 100%; width: 100%;" class="img-fluid" alt="abc"></a>
					</div>
					<div class="couple_1_left2 position-absolute  bg_back w-100 h-100 px-3 text-center top-0">
						<b class="fst-italic d-block fs-3 text-white">Varun & Aisha</b>
						<hr class="bg-white w-100 line_1 mt-1 mb-1">
						<span class="font_13 text-uppercase text-white">Marriage Date 18 March 2025</span>
					</div>
					<div class="couple_1_left3 position-absolute top-0 bg_back w-100 h-100 p-3">
						<p class="mb-0 text-white">Together forever, thanks to Hasthmelap</p>
						<span class="d-block mt-3"><a class="button bg_theme" href="#">View More <i class="bi bi-arrow-right ms-2"></i></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="pt-5 pb-5 bg_light">
	<div class="container-xl">
		<div class="row about_1">
			<div class="col-md-12">
				<b class="fs-3 d-block"> <span class="text_theme">Hasthmelap</span> Metrimony</b>
				<p class="mt-3">Finding a life partner is a journey of trust, hope, and connection. At Hasthmelap, we bring together individuals who are ready to start a new chapter of life with love and understanding. Our platform is designed to be simple, secure, and meaningful.

					We help you find matches based on your preferences, values, and traditions. Whether you're searching for yourself or someone in your family, we’re here to support your journey every step of the way.</p>
				<p class="mb-0"><b>Please Note:</b>All profiles on Hasthmelap go through a manual verification process to ensure authenticity and safety. Our support team is always available to help you with any questions or concerns.</p>
			</div>
		</div>
	</div>
</section>
@endsection