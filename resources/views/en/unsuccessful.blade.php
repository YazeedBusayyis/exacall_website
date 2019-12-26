@extends('ar.master')

@section('logo')

    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
        <img class="u-header__navbar-brand-default logo" src="assets/svg/logos/exacall_logo_white_ar_2.png" alt="Logo">
        <img class="u-header__navbar-brand-on-scroll logo" src="assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
        <img class="u-header__navbar-brand-mobile" src="assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
    </a>

@endsection


@section('content')

    <div class="img-bg" style="background-color: #920bc0;">
        <div class="d-flex align-items-center height-100vh">
            <div class="container text-center">
                <div class="w-lg-50 mx-lg-auto mt-5">
                    <!-- SVG Mockup -->
                    <img style="width:40%;" src="assets/svg/components/cancel.png">
                    <!-- End SVG Mockup -->
                    <!-- Title -->
                    <h1 class="mb-3 mt-3 text-white">We hope you communicate with us</h1>
                    <p class="lead mb-0 text-white">By e-mail sales@exacall.com or by calling us 920033120</p>
                    <p class="lead mb-0 text-white">Thank you for your interest in our services .. <a class="text-white" href="https://www.exacall.com" style="font-weight: bold;"><b>Back to main page</b></a></p>
                    <!-- End Title -->
                </div>
            </div>
        </div>
    </div>

@endsection
