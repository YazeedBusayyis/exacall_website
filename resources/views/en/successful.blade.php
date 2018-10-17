@extends('en.master')

@section('content')

    <div class="img-bg" style="background-color: #920bc0;">
        <div class="d-flex align-items-center height-100vh">
            <div class="container text-center">
                <div class="w-lg-50 mx-lg-auto mt-5">
                    <!-- SVG Mockup -->
                    <img style="width:40%;" src="/assets/svg/components/success.png">
                    <!-- End SVG Mockup -->
                    <!-- Title -->
                    <h3 class="mb-3 mt-3 text-white">Your request has been successfully received</h3>
                    <p class="lead mb-0 text-white">We will be in touch with you within the next 24 hours</p>
                    <p class="lead mb-0 text-white">We are thankful for your interest in our services <a class="text-white" href="http://localhost:8000" style="font-weight: bold;"><b>Go back to the home page</b></a></p>
                    <!-- End Title -->
                </div>
            </div>
        </div>
    </div>

@endsection