@extends('website.layout.master')

@section('title', 'Profile')

@section('content')

<section id="center" class="center_about text-black" style="padding-top:120px; padding-bottom:50px;">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="fw-bold mb-3">My Profile</h2>
                <p class="mb-0 fs-5">
                    <span class="fw-semibold">{{ $user->first_name }} {{ $user->last_name }}</span> - every detail brings you closer to your soulmate.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="profile-section" style="padding-top: 20px;">
    <div class="container">
         @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
        <!-- Profile Header Section -->
        <div class="card shadow border-0">
            <div class="row g-0">
                <!-- Profile Image -->
                <div class="col-md-4 text-center p-4">
                    <div class="profile-image-wrapper mx-auto">
                        <img src="{{ $user->image ? asset('uploads/profile/'.$user->image) : asset('image/default_user.webp') }}" 
                            class="profile-image" alt="Profile Photo">
                    </div>
                    <h4 class="mt-3 text_theme">{{ $user->first_name }} {{ $user->last_name }}</h4>
                    <p class="mb-1"><i class="bi bi-geo-alt text_theme"></i> {{ $user->city ?? '-' }}</p>
                </div>

                <!-- Basic Info -->
                <div class="col-md-8 p-4">
                    <h5 class="mb-3 border-bottom pb-2">Information</h5>
                    <div class="row">
                        <div class="col-sm-6 mb-3"><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</div>
                        <div class="col-sm-6 mb-3"><strong>Mobile Number:</strong> {{ $user->mobile ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Email:</strong> {{ $user->email ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Email:</strong> {{ ucfirst($user->gender) ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Age:</strong> {{ $user->age ? $user->age.' Years' : '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Caste:</strong> {{ $user->caste ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Religion:</strong> {{ $user->religion ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Height:</strong> {{ $user->height ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Weight:</strong> {{ $user->weight ? $user->weight.' kg' : '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>City:</strong> {{ $user->city ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Marital Status:</strong> {{ $user->marital_status ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Hobbies:</strong> {{ $user->hobbies ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Profession:</strong> {{ $user->profession ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>Qualification:</strong> {{ $user->qualification ?? '-' }}</div>
                        <div class="col-sm-6 mb-3"><strong>University:</strong> {{ $user->college_name ?? '-' }}</div>
                    </div>
                    <div class="text-end mt-3">
                        <a href="{{route('edit_user', base64_encode($user->id))}}" class="btn btn-light fw-bold bg_theme text-white btn-custom">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="card shadow border-0 mt-4">
            <div class="card-body">
                <h5 class="mb-3 border-bottom pb-2">About</h5>
                <p>{{ $user->about ?? 'No information provided.' }}</p>
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
                    <div class="col-sm-6 mb-3"><strong>Family Location:</strong> {{ $family->family_location ?? '-' }}</div>
                </div>
                <div class="text-end mt-3">
                    <a href="{{route('edit_family', base64_encode($user->id))}}" class="btn btn-light fw-bold bg_theme text-white btn-custom">Edit Family Details</a>
                </div>
            </div>
        </div>

        <!-- Contact Button -->
        <div class="text-center mt-4 mb-5">
            <a href="https://wa.me/919054905556" target="_blank" class="btn bg_theme text-white px-5 py-2">
                <i class="fab fa-whatsapp"></i> Contact Us for Any Support
            </a>
        </div>
    </div>
</section>

@endsection
