@extends('website.layout.master')

@section('title', 'About Us')

@section('content')
<section id="center" class="center_about pt-4">
    <div class="container-xl">
        <div class="row center_price1 text-center">
            <div class="col-md-12" style="margin-top: 80px;">
                <h1 class="text-black font_50">About Us</h1>
                <p class="mt-3 text-black mb-0 fs-5">Most Trusted and best Matrimony Service in the World.</p>
            </div>
        </div>
    </div>
</section>

<section id="about_pg" class="pb-5">
    <div class="container-xl">
        <div class="row row-cols-1 row-cols-md-3 about_pg1  mx-auto">
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3 text-center hvr-grow mx-2">
                    <span class="text-theme fs-1 mb-3 d-block"><i class="bi bi-person-check text_theme"></i></span>
                    <b class="d-block fs-5">Genuine profiles</b>
                    <p class="mb-0 mt-3">Every profile is verified to ensure safety and authenticity.</p>
                </div>
            </div>
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3 text-center hvr-grow  mx-2">
                    <span class="text-theme fs-1 mb-3 d-block"><i class="bi bi-shield-lock text_theme"></i></span>
                    <b class="d-block fs-5">Most trusted</b>
                    <p class="mb-0 mt-3">Thousands trust us to help them find the right life partner.</p>
                </div>
            </div>
            <div class="col">
                <div class="about_pg1_left shadow bg-white p-4 rounded-3 text-center hvr-grow  mx-2">
                    <span class="text-theme fs-1 mb-3 d-block"><i class="bi bi-arrow-through-heart text_theme"></i></span>
                    <b class="d-block fs-5">1200+ weddings</b>
                    <p class="mb-0 mt-3">Proud to have brought together over 1200 successful matches.</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 about_pg2 mt-5">
            <div class="col">
                <div class="about_pg2_left position-relative">
                    <div class="about_pg2_left1">
                        <img src="image/couple.jfif" alt="abc" class="w-75 rounded-3">
                    </div>
                    <div class="about_pg2_left2 position-absolute bottom-0 text-end">
                        <img src="image/wedding_moments.jfif" alt="abc" class="w-75">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="about_pg2_right">
                    <h1 class="text-uppercase font_50">Welcome to</h1>
                    <h2 class="text-theme text-uppercase">Wedding matrimony</h2>
                    <p class="mt-4 mb-4">Find your perfect life partner with the most trusted matrimony platform. We connect hearts with care, trust, and tradition.</p>
                    <span><a class="text-primary" href="{{route('services')}}">Click here</a> to Start you matrimony journey today.</span>
                    <p class="border-top mt-4 pt-4 mb-4">We make partner search simple and meaningful. Whether you’re looking for someone who shares your values, culture, or dreams, our platform is built to help you find your ideal match. With easy navigation and verified profiles, your journey to a happy future starts here.</p>
                    <ul class="mb-0 d-flex justify-content-between flex-wrap">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3"><i class="bi bi-telephone"></i></span>
                            <span class="flex-column">
                                <span class="text-muted d-block"> Enquiry</span>
                                <b class="d-block fs-5">+91 9054905556</b>
                            </span>
                        </li>
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3"><i class="bi bi-envelope"></i></span>
                            <span class="flex-column">
                                <span class="text-muted d-block"> Get Support</span>
                                <b class="d-block fs-5">hasthmelap21@gmail.com</b>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 about_pg3 mt-5 border-top border-bottom">
            <div class="col">
                <div class="about_pg3_left border-end py-4 px-3">
                    <ul class="mb-0 d-flex">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3 fs-5"><i class="bi bi-heart"></i></span>
                            <span class="flex-column lh-1">
                                <b class="fs-1 d-block"> 1200+</b>
                                <span class="d-block text-uppercase text-muted mt-2 font_13">COUPLES PARED</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="about_pg3_left border-end py-4 px-3">
                    <ul class="mb-0 d-flex">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3 fs-5"><i class="bi bi-people"></i></span>
                            <span class="flex-column lh-1">
                                <b class="fs-1 d-block"> 3000+</b>
                                <span class="d-block text-uppercase text-muted mt-2 font_13">REGISTERED USERS</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="about_pg3_left border-end py-4 px-3">
                    <ul class="mb-0 d-flex">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3 fs-5"><i class="bi bi-gender-male"></i></span>
                            <span class="flex-column lh-1">
                                <b class="fs-1 d-block"> 1200+</b>
                                <span class="d-block text-uppercase text-muted mt-2 font_13">Mens</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="about_pg3_left py-4 px-3">
                    <ul class="mb-0 d-flex">
                        <li class="d-flex">
                            <span class="d-inline-block text-center bg_theme text-white rounded-circle cont_icon me-3 fs-5"><i class="bi bi-gender-female"></i></span>
                            <span class="flex-column lh-1">
                                <b class="fs-1 d-block"> 1700+</b>
                                <span class="d-block text-uppercase text-muted mt-2 font_13">WOMENS</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testim" class="pb-5 pt-5 bg_light">
    <div class="container-xl">
        <div class="testim_1 row text-center mb-4">
            <div class="col-md-12">
                <h2><span class="text-theme">CUSTOMER</span> TESTIMONIALS</h2>
                <span class="text-uppercase">Real Stories. Real Connections. Real Happiness.</span>
            </div>
        </div>
        <div class="testim_2 row row-cols-1 row-cols-md-3">
            <div class="col">
                <div class="testim_2_left">
                    <div class="testim_2_left1 bg-white py-5 px-4 rounded-3 shadow">
                        <span class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span class="font_14 text-muted ms-2">(50 Reviews)</span>
                        </span>
                        <p class="mb-0 mt-3">Hasthmelap made my partner search smooth and stress-free. I found someone who truly understands me.</p>
                    </div>
                    <ul class="mb-0 px-4 mt-4">
                        <li class="d-flex mb-0"  style="height: 70px; width: 300px;">
                            <span><a href="#"><img class="rounded-circle" alt="abc" src="image/review3.jfif"  style="height: 80%; width: 120%;"></a></span>
                            <span class="flex-column ms-3 lh-1 mt-2">
                                <b class="d-block fs-6"><a class="yellow" href="#">Rahul Sharma</a></b>
                                <span class="font_12 d-block text-uppercase mt-2">IT PROFESSION</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="testim_2_left">
                    <div class="testim_2_left1 bg-white py-5 px-4 rounded-3 shadow">
                        <span class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span class="font_14 text-muted ms-2">(40 Reviews)</span>
                        </span>
                        <p class="mb-0 mt-3">The platform is easy to use and highly secure. I'm grateful for the amazing match I found here.</p>
                    </div>
                    <ul class="mb-0 px-4 mt-4">
                        <li class="d-flex mb-0" style="height: 70px; width: 300px;">
                            <span><a href="#"><img class="rounded-circle" alt="abc" src="image/review1.jpg"  style="height: 80%; width: 100%;"></a></span>
                            <span class="flex-column ms-3 lh-1 mt-2">
                                <b class="d-block fs-6"><a class="yellow" href="#">Ashish Dodiya</a></b>
                                <span class="font_12 d-block text-uppercase mt-2">GOVERNMENT STAFF</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="testim_2_left">
                    <div class="testim_2_left1 bg-white py-5 px-4 rounded-3 shadow">
                        <span class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span class="font_14 text-muted ms-2">(55 Reviews)</span>
                        </span>
                        <p class="mb-0 mt-3">Thanks to Hasthmelap, I’m now happily married! The service is genuinely reliable and trustworthy.</p>
                    </div>
                    <ul class="mb-0 px-4 mt-4">
                        <li class="d-flex mb-0"  style="height: 70px; width: 300px;">
                            <span><a href="#"><img class="rounded-circle" alt="abc" src="image/review2.jpg"  style="height: 80%; width: 100%;"></a></span>
                            <span class="flex-column ms-3 lh-1 mt-2">
                                <b class="d-block fs-6"><a class="yellow" href="#">Ketan Saini</a></b>
                                <span class="font_12 d-block text-uppercase mt-2">Teacher</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team Section Start  -->

<section id="team">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="text-uppercase">Meet <span class="text_theme">Our Team</span></h2>
            <span class="text-uppercase text-muted">OUR PROFESSIONALS</span>
        </div>

        <div class="slider-wrapper">
            <div class="slider" id="slider">

                <!-- Profiles -->
                @foreach($teams as $team)
                <div class="team-card">
                    <div class="card">
                        <img src="{{ $team->image ? asset('uploads/team/'. $team->image) : asset('uploads/profile/default_user.png') }}" alt="">
                        <div class="card-body">
                            <h5>{{ $team->name }}</h5>
                            <small>{{ $team->position }}</small>
                            <p>{{ $team->qualification }}</p>
                            <p>{{ $team->experience }} Experience</p>
                            <div>
                                <a href="{{ $team->twitter }}" class="text_theme"><i class="bi bi-twitter"></i></a>
                                <a href="{{ $team->linkedin }}" class="text_theme"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Arrows -->
            <button class="arrow left bg_theme rounded" id="prev">&#10094;</button>
            <button class="arrow right bg_theme rounded" id="next">&#10095;</button>
        </div>
    </div>
</section>
<!-- Meet Our Team Section End  -->

<!-- active page -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
    $(document).ready(function(){
        $("#about-active").addClass("active")
    })
 </script>
@endsection