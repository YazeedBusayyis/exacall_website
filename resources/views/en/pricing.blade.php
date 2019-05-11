@extends('en.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>Pricing and Plan | ExaCall</title>
    <meta name="description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="Pricing and Plan | ExaCall">
    <meta property="og:description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="Pricing and Plan | ExaCall"/>
    <meta name="twitter:description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية"/>
    <meta name="twitter:image" content="/assets/svg/logos/og_img_link.jpg" />

@endsection

@section('logo')

    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
        <img class="u-header__navbar-brand-default logo" src="/assets/svg/logos/exacall_logo_white_ar_2.png" alt="Logo">
        <img class="u-header__navbar-brand-on-scroll logo" src="/assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
        <img class="u-header__navbar-brand-mobile" src="/assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
    </a>

@endsection


@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="gradient-half-primary-v1">
            <div class="bg-img-hero img-bg" style="background-color: #920bc0;">
                <div class="container space-2 space-4-top--lg space-3-bottom--lg">
                    <div class="w-md-80 w-lg-60 text-center mx-auto">
                        <!-- Title -->
                        <div class="mb-9">
                            <h1 class="display-4 text-white">Pricing and Plans</h1>
                            <p class="lead text-white">Get ( 1 Month ) FREE when subscribing for a year</p>
                        </div>
                        <!-- End Title -->

                        <!-- Button Group -->
                        {{--<div class="btn-group btn-group-toggle mb-4" dir="ltr">
                            <a class="js-animation-link btn btn-outline-light btn-wide" href="javascript:;"
                               data-target="#pricingYearly"
                               data-link-group="idPricing">سنوي
                            </a>
                            <a class="js-animation-link btn btn-outline-light btn-wide active" href="javascript:;"
                               data-target="#pricingMonthly"
                               data-link-group="idPricing">شهري
                            </a>
                        </div>--}}
                        <!-- End Button Group -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Pricing Section -->
        <div class="container">
            <div class="bg-gray-100 shadow-lg rounded mt-offset-9">
                <!-- Monthly -->
                <div id="pricingMonthly" data-target-group="idPricing">
                    <div class="card-deck" dir="ltr">
                        <!-- Pricing -->
                        <div class="card">
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">Mini</h4>
                                <p>Suitable for Small Teams</p>
                                <span class="d-block">
                                        <span class="display-4 text-dark">Contact Us</span>
                                        <span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>
                                        {{--<span class="display-4 text-dark">599 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                    </span>
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 5 Extensions</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Extension is an id or a number to represent one of your employees or one of your departments"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 4 Concurrent Calls</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Concurrent Call is the number of received calls at the same time"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Saving recorded phone calls for a month</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Display all phone-calls history</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Free calls between extensions</span>
                                    </li>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact Us</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                        <!-- Pricing -->
                        <div class="card">
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">Basic</h4>
                                <p>Suitable for Entrepreneurs</p>
                                <span class="d-block">
                                        <span class="display-4 text-dark">Contact Us</span>
                                        <span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>
                                        {{--<span class="display-4 text-dark">999 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                    </span>
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 8 Extensions</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Extension is an id or a number to represent one of your employees or one of your departments"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 7 Concurrent Calls </span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Concurrent Call is the number of received calls at the same time"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Saving recorded phone calls for a month</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Display all phone-calls history</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Free calls between extensions</span>
                                    </li>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact Us</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                        <!-- Pricing -->
                        <div class="card">
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">Custom</h4>
                                <p>Customize Your Plan</p>
                                <span class="d-block">
                                        <span class="display-4 text-dark">Contact Us</span>
                                        <span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                </span>
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>More than 8 Extensions</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Extension is an id or a number to represent one of your employees or one of your departments"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>More than 7 Concurrent Calls</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Concurrent Call is the number of received calls at the same time"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Provide 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Saving recorded phone calls for a month</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Display all phone-calls history</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Free calls between extensions</span>
                                    </li>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact Us</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <!-- End Pricing -->
                </div>
                <!-- End Monthly -->
            </div>
        </div>
        <!-- End Pricing Section -->

        <!-- Pricing Table Section -->
        <div class="container space-2 space-3-bottom--lg">
            <!-- Entertainment Pricing Table Features -->
            {{--<table class="table table-striped table-borderless table-responsive-sm text-left">--}}
                {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th scope="col" class="py-5">--}}
                            {{--<span class="h4 font-weight-normal mb-0">Calls and Prices Details</span>--}}
                        {{--</th>--}}
                    {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span>Price per minute for local calls</span>--}}
                        {{--</th>--}}
                        {{--<td><b>40 Halalas</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span>Price per minute for international calls</span>--}}
                        {{--</th>--}}
                        {{--<td><a href="https://exacall.com/documents/call_rates.pdf">Table of Call Rates</a></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span>Price per Extension</span>--}}
                        {{--</th>--}}
                        {{--<td><b>60 SAR</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span>Price per Concurrent calls</span>--}}
                        {{--</th>--}}
                        {{--<td><b>75 SAR</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span class="fa fa-angle-double-right font-size-13 mr-2"></span>--}}
                            {{--<span>If you order from 11 - 19 extensions :</span>--}}
                        {{--</th>--}}
                        {{--<td><b>55 SAR / Extension</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span class="fa fa-angle-double-right font-size-13 mr-2"></span>--}}
                            {{--<span>If you order (20 extensions and more) :</span>--}}
                        {{--</th>--}}
                        {{--<td><b>50 SAR / Extension</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span class="fa fa-angle-double-right font-size-13 mr-2"></span>--}}
                            {{--<span><b>If you subscribe for a full year you (will) get :</b></span>--}}
                        {{--</th>--}}
                        {{--<td><b>1 Month FREE</b></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row" class="font-weight-normal">--}}
                            {{--<span class="fa fa-angle-double-right font-size-13 mr-2"></span>--}}
                            {{--<span><b>Installation fees</b></span>--}}
                        {{--</th>--}}
                        {{--<td><b>500 SAR</b></td>--}}
                    {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
            <!-- End Entertainment Pricing Table Features -->
            <br/>
            <!-- Individual Pricing Table Features -->
            <table class="table table-striped table-borderless table-responsive-sm mb-9 text-left">
                <thead>
                <tr>
                    <th scope="col" class="py-5">
                        <span class="h4 font-weight-normal mb-0">Specifications and Features</span>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">Mini</span>
                        {{--<span class="d-block text-secondary font-weight-normal">599 SAR / month</span>--}}
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">Contact Us</a>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">Basic</span>
                        {{--<span class="d-block text-secondary font-weight-normal">999 SAR / month</span>--}}
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">Contact Us</a>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">Custom</span>
                        <span class="d-block text-secondary font-weight-normal">Depending on the plan</span>
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">Contact Us</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="font-weight-normal">Extensions</th>
                        <td>5</td>
                        <td>8</td>
                        <td>Upon request</td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Concurrent calls</th>
                        <td>4</td>
                        <td>7</td>
                        <td>Upon request</td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Universal Access Number 9200</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Saudi Landline 011</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Users management</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Reports</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Technical Support 24\7</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Desktop and Mobile App</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Interactive voice response ( IVR )</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Call Monitoring</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Call Recording</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Listen to recorded calls</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Call Forwarding</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Messages on Hold</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Call Conferencing</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">Ring Group</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                </tbody>
            </table>
            <!-- End Individual Pricing Table Features -->
        </div>
        <!-- End Pricing Table Section -->

        <!-- Hero Section -->
        <div id="order" class="bg-img-hero img-bg">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-100vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">
                        <!-- Big titles -->
                        <div class="col-lg-6 mb-7 mb-lg-0 text-left">
                            <!-- Title -->
                            <span class="d-block text-white mb-2">Call solutions for businesses and call centers</span>
                            <h1 class="display-4 font-size-48--md-down text-white mb-0">
                                <b>The most flexible system to manage your calls and monitor your business</b>
                            </h1>
                            <a class="btn btn-outline-light mt-4" href="#what" style="border-radius: 50px;">Know more about us</a>
                            <!-- End Title -->
                        </div>
                        <!-- Order Form -->
                        <div class="col-lg-5">
                            <!-- Signup Form -->
                            <div class="bg-white shadow-sm rounded p-6">
                                <form method="post" action="/en/submit_new_order" class="js-validate">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="mb-3">
                                        <h2 class="h4 text-left text-uppercase">
                                            <b>Never miss a call !</b>
                                        </h2>
                                    </div>

                                    <!-- Name - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group form">
                                            <input type="text" class="form-control form__input" name="name" required
                                                   placeholder="Name"
                                                   aria-label="Name">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Email - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group form">
                                            <input id="Email" type="email" class="form-control form__input" name="email" required
                                                   placeholder="Email"
                                                   aria-label="Email">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Phone - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="tel" class="form-control form__input" name="mobile" required
                                                   placeholder="Mobile"
                                                   aria-label="Mobile">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Website - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="url" class="form-control form__input" name="website" required
                                                   placeholder="Company Website"
                                                   aria-label="Company Website">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Company Size - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <select type="phone" class="form-control form__input" name="size" required
                                                    placeholder="Company Size"
                                                    aria-label="Company Size">
                                                <option disabled selected>Company Size</option>
                                                <option value="1">Work alone</option>
                                                <option value="2 - 10">From 2 to 10</option>
                                                <option value="11 - 50">From 11 to 50</option>
                                                <option value="51 - 100">From 51 - 100</option>
                                                <option value="+ 100">More than 100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <button id="orderNow" type="submit" class="btn btn-block btn-primary">Join Us Now</button>
                                </form>
                            </div>
                            <!-- End Signup Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->
        </div>
        <!-- End Hero Section -->

        <!-- CTA -->
        <div class="gradient-overlay-half-primary-v1">
            <div class="bg-img-hero" style="background-color: #410954;">
                <div class="container">
                    <div class="row align-items-lg-center text-center text-lg-left space-2">
                        <div class="col-lg-12 text-center">
                            <h2 class="text-white"><b>Subscribe to our Newsletter</b></h2>
                            <p class="lead text-white mb-5">Learn a lot of tips and ideas to improve your customer service and manage your call center</p>
                        </div>
                        <div class="col-lg-12">
                            <form method="post" action="https://exacall.us18.list-manage.com/subscribe/post" class="form-inline d-flex justify-content-center">
                                <input type="hidden" name="u" value="c631c0419954e2c52b478dede">
                                <input type="hidden" name="id" value="3b3a65a8df">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Your Email</label>
                                    <input class="form-control" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="Your Email">
                                </div>
                                <button type="submit" class="btn btn-light mb-2">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End CTA -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

@endsection