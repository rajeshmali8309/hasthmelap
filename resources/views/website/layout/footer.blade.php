<section id="footer" class="pt-5 pb-5 bg_blue">
	<div class="container-xl">
		<div class="row row-cols-1 row-cols-md-1 footer_1">
			<div class="col">
				<b class="d-block fs-5 text-white">Building Relationships That Last</b>
				<p class="mt-3 text-white-50">We are committed to bringing together individuals from across cultures, traditions, and languages. Our trusted matchmaking platform ensures privacy, security, and genuine connections to help you find the perfect life partner. Join millions who have found their happiness through us.</p>
			</div>
		</div>
		<div class="container-fluid px-0">
			<div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 g-0 mx-0">
				<!-- Matrimony Services -->
				<div class="col">
					<div class="p-3">
						<b class="fs-5 d-block text-white mb-3">Matrimony Services</b>
						<ul class="mb-0 font_14 list-unstyled">
							<li class="mb-2"><a class="text-white-50" href="{{route('services')}}">Silver Plan</a></li>
							<li class="mb-2"><a class="text-white-50" href="{{route('services')}}">Gold Plan</a></li>
							<li><a class="text-white-50" href="{{route('services')}}">Platinum Plan</a></li>
						</ul>
					</div>
				</div>

				<!-- Help & Support -->
				<div class="col">
					<div class="p-3">
						<b class="fs-5 d-block text-white mb-3">Help & Support</b>
						<ul class="mb-0 font_14 list-unstyled">
							<li class="mb-2"><a class="text-white-50" href="{{route('contact')}}">Contact Us</a></li>
							<li class="mb-2"><a class="text-white-50" href="{{route('contact')}}">Feedback</a></li>
							<li><a class="text-white-50" href="#">FAQs</a></li>
						</ul>
					</div>
				</div>

				<!-- Information -->
				<div class="col">
					<div class="p-3">
						<b class="fs-5 d-block text-white mb-3">Information</b>
						<ul class="mb-0 font_14 list-unstyled">
							<li class="mb-2"><a class="text-white-50" href="{{route('about')}}">About Us</a></li>
							<li class="mb-2"><a class="text-white-50" href="#">Terms & Conditions</a></li>
							<li><a class="text-white-50" href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<!-- Relationship Support -->
				<div class="col">
					<div class="p-3">
						<b class="fs-5 d-block text-white mb-3">Relationship Support</b>
						<ul class="mb-0 font_14 list-unstyled">
							<li class="mb-2"><a class="text-white-50" href="#">Relationship Advice</a></li>
							<li class="mb-2"><a class="text-white-50" href="#">Couple Compatibility Tests</a></li>
							<li><a class="text-white-50" href="#">Success Stories</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer_bottom_1 row  mt-4">
			<div class="col-md-8">
				<div class="footer_bottom_1_left pt-2">
					<p class="mb-0 text-white-50">© {{ date('Y') }} <a href="{{route('index')}}" style="color: rgb(247, 156, 129)">Hasthmelap Metrimony</a>. All Rights Reserved.</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer_bottom_1_right">
					<ul class="mb-0 d-flex social_brands justify-content-end">
						<li><a class="d-inline-block text-white text-center" href="https://www.facebook.com/profile.php?id=61579294905117"><i class="bi bi-facebook"></i></a></li>
						<li class="ms-2"><a class="d-inline-block text-white text-center" href="https://www.instagram.com/hasthmelap"><i class="bi bi-instagram"></i></a></li>
						<li class="ms-2"><a class="d-inline-block text-white text-center" href="https://www.linkedin.com/in/hasthmelap-metrimony-787b9437b/"><i class="bi bi-linkedin"></i></a></li>
						<li class="ms-2"><a class="d-inline-block text-white text-center" href="https://www.youtube.com/@Hasthmelap"><i class="bi bi-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Floating Feedback Button -->
		<button id="feedbackBtn">
			Leave a Review
		</button>

		<!-- Feedback Modal -->
		<div id="feedbackModal" class="feedback-modal">
			<div class="feedback-content">
				<span id="closeModal" class="feedback-close">&times;</span>
				<h4 class="feedback-title">Leave a review</h4>

				<form id="feedbackForm" method="POST" action="">
					@csrf

					<!-- Rating -->
					<div class="mb-3 text-center" id="starRating">
						<label class="feedback-label"></label>
						<span class="feedback-star" data-value="1">&#9733;</span>
						<span class="feedback-star" data-value="2">&#9733;</span>
						<span class="feedback-star" data-value="3">&#9733;</span>
						<span class="feedback-star" data-value="4">&#9733;</span>
						<span class="feedback-star" data-value="5">&#9733;</span>
						<input type="hidden" name="rating" id="ratingValue" required>
					</div>

					<!-- Description -->
					<div class="mb-3">
						<label class="feedback-label">Your Feedback:</label>
						<textarea name="description" class="feedback-textarea" rows="4" placeholder="Write your feedback here..." required></textarea>
					</div>

					<!-- Submit -->
					<div class="text-center">
						<button type="submit" class="feedback-submit">Submit Feedback</button>
					</div>
				</form>
			</div>
		</div>


		<!-- WhatsApp Floating Button -->
		<a href="https://wa.me/9054905556?text=Hello%20I%20am%20interested%20in%20your%20services"
			target="_blank"
			class="btn btn-success rounded-circle d-flex align-items-center justify-content-center shadow whatsapp-btn"
			style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; z-index: 1000;">
			<i class="bi bi-whatsapp fs-2 text-white"></i>
		</a>
	</div>
</section>

<script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/theme.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		// Search toggle click
		$("#searchToggle").on("click", function(e) {
			e.preventDefault();
			$(".drop_search").toggleClass("show"); // dropdown ko toggle kar de
		});

		// Bahar click karne par band ho jaye
		$(document).on("click", function(e) {
			if (!$(e.target).closest('#searchToggle, .drop_search').length) {
				$(".drop_search").removeClass("show");
			}
		});

		// Search input typing pe results show
		$('#searchBox').on('keyup', function() {
			let query = $(this).val();
			const showUserUrl = "{{ route('show_user', ':id') }}";

			if (query.length > 0) {
				$.ajax({
					url: "{{ route('search') }}", // tera Laravel route
					type: "GET",
					data: {
						query: query
					},
					success: function(data) {
						let html = '';
						if (data.length > 0) {
							data.forEach(function(user) {
								let encodedId = btoa(user.id);
								let userUrl = showUserUrl.replace(':id', encodedId);
								html += `<a href="${userUrl}" class="text-decoration-none text-dark">
										<div class="d-flex align-items-center mb-2 p-2 border rounded bg-light search-item">
											<img src="${user.image ? '/uploads/profile/'+user.image : 'image/default_user.webp'}" 
												class="rounded-circle me-2 flex-shrink-0" width="40" height="40">
											<div class="d-flex flex-column">
												<span class="fw-semibold text-truncate">${user.first_name} ${user.last_name}</span>
												<small class="text-muted">Age: ${user.age ? user.age : '-'}</small>
											</div>
										</div>
									</a>`;
							});
						} else {
							html = '<p class="text-muted text-center">No results found</p>';
						}

						$('#searchResults').html(html).show();
					},
					error: function() {
						$('#searchResults').html('<p class="text-danger text-center">Error fetching results</p>').show();
					}
				});
			} else {
				$('#searchResults').hide();
			}
		});

		// review query
		// Open Modal
		$('#feedbackBtn').click(function(){
			$('#feedbackModal').fadeIn().css('display', 'flex');
		});

		// Close Modal
		$('#closeModal').click(function(){
			$('#feedbackModal').fadeOut();
		});

		// Click outside modal
		$(window).click(function(e){
			if($(e.target).is('#feedbackModal')){
				$('#feedbackModal').fadeOut();
			}
		});


		$('#starRating .feedback-star').click(function(){
			var rating = $(this).data('value');
			$('#ratingValue').val(rating);
			$('#starRating .feedback-star').removeClass('selected').css('color','#ccc');
			$(this).prevAll().addBack().addClass('selected').css('color','#ff9800');
		});

		// Optional: form submit validation
		$('#feedbackForm').submit(function(e){
			if(!$('#ratingValue').val()){
				alert('Please select a rating!');
				e.preventDefault();
			}
		});
	});

</script>
</body>

</html>