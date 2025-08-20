@extends('website.layout.master')

@section('title', 'Gallery')

@section('content')

<section id="center" class="pt-5 pb-5 gallery">
    <div class="container-xl">
        <div class="testim_1 row text-center mb-4">
            <div class="col-md-12">
                <h2 class="text-uppercase"><span class="text_theme">Our</span> Gallery</h2>
                <span class="text-uppercase">FUSCE IMPERDIET ULLAMCORPER FRINGILLA.</span>
            </div>
        </div>

        <div class="row g-2">
            @foreach($customers as $customer)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card border-0 gallery-card">
                        <div class="position-relative overflow-hidden image-wrapper" style="height: 350px;">
                            <img src="{{ $customer->image ? asset('uploads/profile/'. $customer->image) : asset('image/default_user.webp') }}" 
                            class="img-fluid gallery-img" alt="Profile Image" style="height: 100%;">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <a href="{{route('show_user', base64_encode($customer->id))}}" class="btn btn-light fw-bold bg_theme text-white btn-custom">View Profile</a>
                            </div>
                        </div>
                        <div class="card-body text-center p-2">
                            <h6 class="mb-1 fw-bold">
                                {{ $customer->first_name }} {{ $customer->last_name }}
                            </h6>
                            <p class="mb-0 small">
                                Age: {{ $customer->age ?? '-' }} | Caste: {{ $customer->caste ?? '-' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Dynamic Pagination -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $customers->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

<!-- active page -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
    $(document).ready(function(){
        $("#gallery-active").addClass("active")
    })
 </script>
@endsection
