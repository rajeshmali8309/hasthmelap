@extends('website.layout.master')

@section('title', 'Our Services')

@section('content')

<section id="center" class="center_price pt-4">
	<div class="container-xl">
		<div class="row center_price1 text-center">
			<div class="col-md-12" style="margin-top: 80px;">
				<b class="text-black">PRICING</b>
				<h1 class="mt-3 text-black">Get Started <br>
					Pick your Plan Now</h1>
				<p class="mt-3 text-black">Choose a plan that suits your journey best. Whether you're exploring or ready to commit, we have something for everyone.</p>
			</div>
		</div>
	</div>
</section>

<section id="price" class="pb-5">
	<div class="container-xl">
		<div class="row row-cols-1 row-cols-md-3 price_1">
			<div class="col">
				<div class="price_1_left shadow bg-white py-5 px-4 rounded_30 text-center mt-5">
					<b class="d-block fs-4">Silver</b>
					<span class="d-block text-center">
						<a class="button w-75 mx-auto bg_theme" id="silver" href="#">Get Started</a>
					</span>
					<p class="mt-2 text-success fs-5">50% OFF</p>
					<b class="fs-3 d-block mt-3"><span class="text-muted fw-normal"><strike>₹6,000</strike> / </span>₹3,000</b>
					<p class="text-black fw-normal fs-6">For 6 Month</p>
					<ul class="mt-3 font_14 text-start px-4 mb-0">
						<li><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> Limited access to profiles</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> AI basic match suggestions</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> 50 Interest requests per month</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> AI profile completion tips</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> 24/7 Basic support</li>
					</ul>
				</div>
			</div>

			<div class="col">
				<div class="price_1_left shadow bg-white py-5 px-4 rounded_30 text-center">
					<span class="d-inline-block bg-warning text-white rounded-pill py-2 px-3 font_14 mb-3">Most popular plan</span>
					<b class="d-block fs-4">Platinum</b>
					<span class="d-block text-center">
						<a class="button button_1 w-75 mx-auto" id="platinum" href="#">Get Started</a>
					</span>
					<p class="mt-2 text-success fs-5	">50% OFF</p>
					<b class="fs-3 d-block mt-3"><span class="text-muted fw-normal"><strike> ₹24,000</strike> / </span> ₹12,000</b>
					<p class="text-black fw-normal fs-6">Lifetime Membership</p>
					<ul class="mt-3 font_14 text-start px-4 mb-0">
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>All Gold plan features plus:</span>
						</li>
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>Lifetime access no renewal needed</span>
						</li>
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>Ai-powered Premium Matchmaking Assistent (real time match suggestions)</span>
						</li>
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>Unlimited interest request & messages</span>
						</li>
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>Top priority profiles listing in searches</span>
						</li>
						<li class="mt-2 d-flex align-items-start">
							<span class="icon-wrap me-2">
								<i class="bi bi-check"></i>
							</span>
							<span>24/7 Customer support (lifetime access)</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="col">
				<div class="price_1_left shadow bg-white py-5 px-4 rounded_30 text-center mt-5">
					<b class="d-block fs-4">Gold</b>
					<span class="d-block text-center">
						<a class="button  w-75 mx-auto bg_theme" id="gold" href="#">Get Started</a>
					</span>
					<p class="mt-2 text-success fs-4">50% OFF</p>
					<b class="fs-3 d-block mt-3"><span class="text-muted fw-normal"><strike> ₹14,000</strike></span> / ₹7,000</b>
					<p class="text-black fw-normal fs-6">For 1.5 years</p>
					<ul class="mt-3 font_14 text-start px-4 mb-0">
						<li><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> Unlimited profile views</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> AI daily smart matches</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> 100 Interest requests per month</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> AI compatibility scores</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> Profile highlight</li>
						<li class="mt-2"><i class="bi bi-check price_icon bg-success rounded-circle text-white text-center d-inline-block fw-bold me-2"></i> AI conversation starters</li>
					</ul>
				</div>
			</div>
			<div class="w-100 bg_theme text-dark fw-bold py-2 mt-3 text-center overflow-hidden">
				<span class="bounce-blink">All plans include free background verification and a secure, trusted platform.</span>
			</div>
		</div>
	</div>
</section>

@if(session()->has('user_id'))

<!-- Silver Modal -->
<div class="modal fade" id="silverModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content rounded-3">
			<div class="modal-header">
				<h5 class="modal-title"><span class="text_theme">Silver Plan</span> - ₹3,000</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div style="text-align: center;">
					<img src="{{ asset('image/silver.jpg') }}" width="150">
				</div>
				<!-- <a href="upi://pay?pa=rk03253097-1@okhdfcbank&pn=Rajesh%20Kumar&am=3000.00&cu=INR&aid=uGICAgID3yrzQPw" class="btn bg_theme text-white w-100 mb-3">Purchase Now</a> -->
				<form action="{{route('payment_proof')}}" id="SilverForm" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ session('user_id') }}" name="user_id">
					<input type="hidden" value="Silver" name="plan_name">
					<div class="mb-3">
						<label class="form-label">UTR Number</label>
						<input type="text" value="" name="utr" class="form-control" placeholder="Enter UTR Number" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Upload Payment Proof</label>
						<input type="file" name="proof" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-success w-100">Submit</button>
				</form>
				<p class="mt-3 text-muted small">Note: Payment will approve within 60 minutes.</p>
			</div>
		</div>
	</div>
</div>


<!-- Gold Modal -->
<div class="modal fade" id="goldModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content rounded-3">
			<div class="modal-header">
				<h5 class="modal-title"><span class="text_theme">Gold Plan</span> - ₹7,000</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div style="text-align: center;">
					<img src="{{ asset('image/silver.jpg') }}" width="150">
				</div>
				<!-- <a href="upi://pay?pa=rk03253097-1@okhdfcbank&pn=Rajesh%20Kumar&am=3000.00&cu=INR&aid=uGICAgID3yrzQPw" class="btn bg_theme text-white w-100 mb-3">Purchase Now</a> -->
				<form id="GoldForm" method="post" action="" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ session('user_id') }}" name="user_id">
					<input type="hidden" value="Gold" name="plan_name">
					<div class="mb-3">
						<label class="form-label">UTR Number</label>
						<input type="text" name="utr" class="form-control" placeholder="Enter UTR Number" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Upload Payment Proof</label>
						<input type="file" name="proof" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-success w-100">Submit</button>
				</form>
				<p class="mt-3 text-muted small">Note: Payment will approve within 60 minutes.</p>
			</div>
		</div>
	</div>
</div>


<!-- Platinum Modal -->
<div class="modal fade" id="platinumModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content rounded-3">
			<div class="modal-header">
				<h5 class="modal-title"><span class="text_theme">Platinum Plan</span> - ₹12,000</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div style="text-align: center;">
					<img src="{{ asset('image/silver.jpg') }}" width="150">
				</div>
				<!-- <a href="upi://pay?pa=rk03253097-1@okhdfcbank&pn=Rajesh%20Kumar&am=3000.00&cu=INR&aid=uGICAgID3yrzQPw" class="btn bg_theme text-white w-100 mb-3">Purchase Now</a> -->
				<form id="PlatinumForm" method="post" action="" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ session('user_id') }}" name="user_id">
					<input type="hidden" value="Platinum" name="plan_name">
					<div class="mb-3">
						<label class="form-label">UTR Number</label>
						<input type="text" name="utr" class="form-control" placeholder="Enter UTR Number" required>
					</div>
					<div class="mb-3">
						<label class="form-label">Upload Payment Proof</label>
						<input type="file" name="proof" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-success w-100">Submit</button>
				</form>
				<p class="mt-3 text-muted small">Note: Payment will approve within 60 minutes.</p>
			</div>
		</div>
	</div>
</div>
@endif


<!-- active page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$("#services-active").addClass("active");

		const userId = "{{ session('user_id') }}";

		// Silver modal open on click
		$("#silver").click(function(e) {
			e.preventDefault();
			if(!userId){
				window.location.href = "{{ route('login') }}?error=Please login first";
			}
			$("#silverModal").modal('show');
		});

		// Gold modal open on click
		$("#platinum").click(function(e) {
			e.preventDefault();
			if(!userId){
				window.location.href = "{{ route('login') }}?error=Please login first";
			}
			$("#platinumModal").modal('show');
		});

		// Platinum modal open on click
		$("#gold").click(function(e) {
			e.preventDefault();
			if(!userId){
				window.location.href = "{{ route('login') }}?error=Please login first";
				return;
			}
			$("#goldModal").modal('show');
		});
	});
</script>
@endsection