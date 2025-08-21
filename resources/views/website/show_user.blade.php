@extends('website.layout.master')

@section('title', 'User Profile')

@section('content')

<section class="profile-section" style="padding-top: 120px;">
    <div class="container">
        <!-- Profile Header Section -->
        <div class="card shadow border-0">
            <div class="row g-0">
                <!-- Profile Image -->
                <div class="col-md-4 text-center p-4">
                    <img src="{{ !empty($user->image) && file_exists(public_path('uploads/profile/' . $user->image)) 
                                ? asset('uploads/profile/' . $user->image) 
                                : asset('image/default_user.webp') }}"
                         class="img-fluid rounded-circle border"
                         alt="Profile Photo"
                         style="max-width: 220px;">
                    <h4 class="mt-3 text_theme">{{ ($user->first_name ?? '-') . ' ' . ($user->last_name ?? '') }}</h4>
                    <p class="mb-1">
                        <i class="bi bi-geo-alt text_theme"></i> 
                        {{ $user->city ?? '-' }}
                    </p>
                </div>

                <!-- Basic Info -->
                <div class="col-md-8 p-4">
                    <h5 class="mb-3 border-bottom pb-2">Information</h5>
                    <div class="row">
                        <div class="col-sm-6 mb-3"><strong>Name:</strong> {{ ($user->first_name ?? '-') . ' ' . ($user->last_name ?? '') }}</div>
                        <div class="col-sm-6 mb-3"><strong>Age:</strong> {{ !empty($user->age) ? $user->age . ' Years' : '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Gender:</strong> {{ ucfirst($user->gender) ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Caste:</strong> {{ $user->caste ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Religion:</strong> {{ $user->religion ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Height:</strong> {{ $user->height ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Weight:</strong> {{ !empty($user->weight) ? $user->weight . ' kg' : '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>City:</strong> {{ $user->city ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Marital Status:</strong> {{ $user->marital_status ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Hobbies:</strong> {{ $user->hobbies ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Profession:</strong> {{ $user->profession ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Qualification:</strong> {{ $user->qualification ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>University:</strong> {{ $user->college_name ?? '-' }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="card shadow border-0 mt-4">
            <div class="card-body">
                <h5 class="mb-3 border-bottom pb-2">About</h5>
                <p>{{ !empty($user->about) ? $user->about : 'No information provided.' }}</p>
            </div>
        </div>

        <!-- Family Details -->
        <div class="card shadow border-0 mt-4">
            <div class="card-body">
                <h5 class="mb-3 border-bottom pb-2">Family Details</h5>
                <div class="row">
                    <div class="col-sm-6 mb-3"><strong>Father's Name:</strong> {{ $family->father_name ?? '-' }}</div>
                    <div class="col-sm-6 mb-3"><strong>Profession:</strong> {{ $family->profession ?? '-' }}</div>

                    <div class="col-sm-6 mb-3"><strong>Mother's Name:</strong> {{ $family->mother_name ?? '-' }}</div>
                    <div class="col-sm-6 mb-3"><strong>Total Siblings:</strong> {{ $family->total_siblings ?? '-' }}</div>
                    <div class="col-sm-6 mb-3"><strong>Family Status:</strong> {{ $family->family_status ?? '-' }}</div>
                    <div class="col-sm-6 mb-3"><strong>Annual Income:</strong> {{ $family->annual_income ?? '-' }}</div>
                </div>
            </div>
        </div>

        <!-- Contact Button -->
        <div class="text-center mt-4 mb-5">
            <a href="https://wa.me/919054905556" target="_blank" class="btn bg_theme text-white px-5 py-2">
                <i class="fab fa-whatsapp"></i> Contact on WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
