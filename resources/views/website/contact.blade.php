@extends('website.layout.master')

@section('title', 'Contact Us')

@section('content')
<section id="center" class="center_about pt-4">
    <div class="container-xl">
        <div class="row center_price1 text-center">
            <div class="col-md-12" style="margin-top: 80px;">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                <b class="fs-5 d-block mb-3 text-warning text-black">WE ARE HERE TO ASSIST YOU.</b>
                <h1 class="text-black font_50">Contact us</h1>
                <p class="mt-3 text-black mb-0 fs-5">Your most trusted and reliable matrimony partner.</p>
            </div>
        </div>
    </div>
</section>

<section id="about_pg" class="pb-5">
    <div class="container-xl">
        <div class="row row-cols-1 row-cols-md-3 contact_1">
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3">
                    <b class="fs-4">OUR OFFICE</b>
                    <p class="mt-3">Premium and verified matrimonial service you can count on.</p>
                    <ul class="mb-0">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_blue text-white rounded-circle cont_icon me-3"><i class="bi bi-telephone"></i></span>
                            <span class="d-block text-muted mt-2">+91 7984889816</span>
                        </li>
                        <li class="d-flex mt-2">
                            <span class="d-inline-block text-center bg_blue text-white rounded-circle cont_icon me-3"><i class="bi bi-envelope"></i></span>
                            <span class="d-block text-muted mt-2">hasthmelap21@gmail.com</span>
                        </li>
                        <li class="d-flex mt-2">
                            <span class="d-inline-block text-center bg_blue text-white rounded-circle cont_icon me-3"><i class="bi bi-map"></i></span>
                            <span class="d-block text-muted mt-2">Ahmedabad, Gujarat.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3 text-center">
                    <span class="text_theme font_50 mb-3 d-block"><i class="bi bi-person"></i></span>
                    <b class="d-block">CUSTOMER RELATIONS</b>
                    <p class="mb-0 mt-3">Get help with your account, profile, or membership.</p>
                    <span class="d-block mt-3 text-center"><a class="button rounded-pill bg_theme" href="https://wa.me/917984889816">Get Support</a></span>
                </div>
            </div>
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3 text-center">
                    <span class="text_theme font_50 mb-3 d-block"><i class="bi bi-whatsapp"></i></span>
                    <b class="d-block">WHATSAPP SUPPORT</b>
                    <p class="mb-0 mt-3">Chat directly with our support team on WhatsApp.</p>
                    <span class="d-block mt-3 text-center"><a class="button rounded-pill bg_theme" href="https://wa.me/917984889816">Get Support</a></span>
                </div>
            </div>
        </div>
        <div class="row  contact_2  mt-5  mx-auto">
            <div class="col-md-5 p-0">
                <div class="contact_2_left bg_light py-5 px-4">
                    <h1 class="mb-4">Now
                        <span class="font_50">Contact to us</span>
                        Easy and fast.
                    </h1>
                    <a href="#"><img src="image/logo.jpg" style="border-radius: 10px;" class="img-fluid" alt="abc"></a>
                    <p class="mb-0 mt-4">Finding the right partner starts with the right support. Whether you have questions, need guidance, or simply want to know more about our services, we’re here to help you every step of the way. Let’s build your love story together.</p>
                </div>
            </div>
            <div class="col-md-7 p-0">
                <div class="contact_2_right shadow py-5 px-4">
                    <span>LET'S TALK</span>
                    <h4 class="mt-3">Send your enquiry now</h4>
                    <hr class="mt-3 mb-3 line">

                    <form action="{{route('store_contacts')}}" method="post">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" value="{{old('name')}}" id="name" placeholder="Enter name" name="name">
                            <p id="errorname" class="text-danger mt-2"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" value="{{old('email')}}" id="email" placeholder="Enter email" name="email">
                            <p id="erroremail" class="text-danger mt-2"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="mobile">Mobile Number:</label>
                            <input type="number" class="form-control" value="{{old('mobile')}}" id="mobile" placeholder="Enter mobile number" name="mobile">
                            <p id="errormobile" class="text-danger mt-2"></p>
                        </div>

                        <div class="form-group mt-2">
                            <label for="message">Message:</label>
                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Enter nessage">{{old('message')}}</textarea>
                            <p id="errormessage" class="text-danger mt-2"></p>
                        </div>

                        <div class="form-group mt-2 d-flex justify-content-center">
                            <button type="submit" class="bg_theme text-white py-2 px-5 mt-5 rounded rounded-5"
                                style="border: none;">Send Enquiry</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="row contact_3 mt-5">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14682.200752855684!2d72.56370183773848!3d23.07694690693354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e839b70c6b7e3%3A0xd77459dae576ede!2sRanip%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1754936995568!5m2!1sen!2sin" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

<script>
    $(document).ready(function() {
        const nameRegex = /^[A-Za-z]{2,}(?:\s[A-Za-z]{2,})*$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const Mnumber = /^\d{10,15}$/;

        // ========== NAME ==========
        $("#name").on("keyup", function() {
            let val = $(this).val().trim();
            if (val !== "" && !nameRegex.test(val)) {
                $("#errorname").text("Please enter a valid name");
            } else {
                $("#errorname").text("");
            }
        });

        $("#name").on("blur", function() {
            let val = $(this).val().trim();
            if (val === "") {
                $("#errorname").text("Name field is required");
            } else if (!nameRegex.test(val)) {
                $("#errorname").text("Please enter a valid name");
            } else {
                $("#errorname").text("");
            }
        });

        // ========== EMAIL ==========
        $("#email").on("keyup", function() {
            let val = $(this).val().trim();
            if (val !== "" && !emailRegex.test(val)) {
                $("#erroremail").text("Please enter a valid email");
            } else {
                $("#erroremail").text("");
            }
        });

        $("#email").on("blur", function() {
            let val = $(this).val().trim();
            if (val === "") {
                $("#erroremail").text("Email field is required");
            } else if (!emailRegex.test(val)) {
                $("#erroremail").text("Please enter a valid email");
            } else {
                $("#erroremail").text("");
            }
        });

        // ========== MOBILE ==========
        $("#mobile").on("keyup", function() {
            let val = $(this).val().trim();
            if (val !== "" && !Mnumber.test(val)) {
                $("#errormobile").text("Please enter a valid mobile number.");
            } else {
                $("#errormobile").text("");
            }
        });

        $("#mobile").on("blur", function() {
            let val = $(this).val().trim();
            if (val === "") {
                $("#errormobile").text("Mobile Number field is required");
            } else if (!Mnumber.test(val)) {
                $("#errormobile").text("Please enter a valid mobile number");
            } else {
                $("#errormobile").text("");
            }
        });

        // ========== MESSAGE ==========
        $("#message").on("keyup", function() {
            let val = $(this).val().trim();
            if (val !== "" && val.length < 15) {
                $("#errormessage").text("Message should be at least 5 characters");
            } else {
                $("#errormessage").text("");
            }
        });

        $("#message").on("blur", function() {
            let val = $(this).val().trim();
            if (val === "") {
                $("#errormessage").text("Please enter your query");
            } else if (val.length < 5) {
                $("#errormessage").text("Message should be at least 5 characters");
            } else {
                $("#errormessage").text("");
            }
        });

        $("form").on("submit", function(e) {
            let isValid = true;

            // Name check
            let name = $("#name").val().trim();
            if (!nameRegex.test(name)) {
                $("#errorname").text("Please enter a valid name");
                isValid = false;
            } else {
                $("#errorname").text("");
            }

            // Email check
            let email = $("#email").val().trim();
            if (!emailRegex.test(email)) {
                $("#erroremail").text("Please enter a valid email");
                isValid = false;
            } else {
                $("#erroremail").text("");
            }

            // Mobile check
            let mobile = $("#mobile").val().trim();
            if (!Mnumber.test(mobile)) {
                $("#errormobile").text("Please enter a valid mobile number");
                isValid = false;
            } else {
                $("#errormobile").text("");
            }

            // Message check
            let message = $("#message").val().trim();
            if (message.length < 5) {
                $("#errormessage").text("Please enter your query (min 5 chars)");
                isValid = false;
            } else {
                $("#errormessage").text("");
            }

            // Agar koi bhi galti hai to submit stop
            if (!isValid) {
                e.preventDefault();
            }
        });

        // Error clear on focus (input + textarea both)
        $("input, textarea").focus(function() {
            let inputID = $(this).attr("id");
            $("#error" + inputID).text("");
        });
    });
</script>
@endsection