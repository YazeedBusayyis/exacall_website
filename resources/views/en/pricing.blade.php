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
							<h3 class="display-4 text-white" style="position: relative; top: 80px; font-size: 40px;">Cloud Central</h3>
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
                                <h4 class="h4">Micro</h4>
                                <p>Suitable for Small Teams</p>
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">299 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 3 Extensions</span>
                                        <span class="fa fa-info-circle text-secondary ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Extension is an id or a number to represent one of your employees or one of your departments"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 2 Concurrent Calls</span>
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
                                    <div class="mb-2 text-center">
                                    <span class="card-price text-center">299 SAR</span>
                                    <span class="period">/ month</span>
                                </div>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                        <!-- Pricing -->
                        <div class="card">                        
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">Mini</h4>
                                <p>Suitable for Small Teams</p>
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">599 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
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
                                <div class="mb-2 text-center">
                                    <span class="card-price text-center">599 SAR</span>
                                    <span class="period">/ month</span>
                                </div>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
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
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">999 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
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
                                    <div class="mb-2 text-center">
                                    <span class="card-price text-center">999 SAR</span>
                                    <span class="period">/ month</span>
                                </div>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
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
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                {{--</span>--}}
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
                                <br>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
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
		<div style="height: 102px"></div>
		 <!-- Pricing Section -->
        <div class="container">
            <div class="bg-gray-100 shadow-lg rounded mt-offset-9">
				<h3 class="display-4 text-black" style="font-size: 40px; text-align: center; margin-top: 23px; padding: 10px;">C.R.M</h3>
                <!-- Monthly -->
                <div id="pricingMonthly" data-target-group="idPricing">
                    <div class="card-deck" dir="ltr">
                        <!-- Pricing -->
                        <div class="card">                        
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">CRM Package 3 users</h4>
                              
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">299 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Sales 405 SAR</span>
                                       
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Ticketing 405 SAR</span>
                                       
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Marketing 390 SAR</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>All Features 447 SAR </span>
                                    </li>
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                        <!-- Pricing -->
                        <div class="card">                        
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">CRM Package 5 users</h4>
                               
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">599 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Sales 650 SAR</span>
                                       
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Ticketing 650 SAR</span>
                                       
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Marketing 625 SAR</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>All Features 725 SAR</span>
                                    </li>
                                </ul>
                                
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
                            </div>
                            <!-- End Content -->
                        </div>
                        <!-- End Pricing -->
                        <!-- Pricing -->
                        <div class="card">
                            <!-- Header -->
                            <header class="card-header text-center p-5">
                                <h4 class="h4">CRM Package 8 users</h4>
                                
                                {{--<span class="d-block">--}}
                                        {{--<span class="display-4 text-dark">Contact Us</span>--}}
                                        {{--<span class="d-block text-secondary" style="font-size: 25px;">for Quotation</span>--}}
                                        {{--<span class="display-4 text-dark">999 SAR</span>--}}
                                        {{--<span class="d-block text-secondary font-size-14">per month</span>--}}
                                {{--</span>--}}
                            </header>
                            <!-- End Header -->
                            <!-- Content -->
                            <div class="card-body p-5">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Sales 1000 SAR</span>
                                        
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Ticketing 1000 SAR</span>
                                        
                                    </li>
                                   
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Marketing 960 SAR</span>
                                    </li>
                                   
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>All Features 1120 SAR</span>
                                    </li>
                                   
                                </ul>
                                <a href="#order" class="btn btn-block btn-primary">Contact us for quotation</a>
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
