@extends('en.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>Call solutions for businesses and contact centers | ExaCall</title>
    <meta name="description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="Call solutions for businesses and contact centers | ExaCall">
    <meta property="og:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="Call solutions for businesses and contact centers | ExaCall" />
    <meta name="twitter:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال"/>
    <meta name="twitter:image" content="/assets/svg/logos/og_img_link.jpg" />

@endsection

@section('logo')

    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
        <img class="u-header__navbar-brand-default logo" src="assets/svg/logos/exacall_logo_white_ar_2.png" alt="Logo">
        <img class="u-header__navbar-brand-on-scroll logo" src="assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
        <img class="u-header__navbar-brand-mobile" src="assets/svg/logos/exacall_logo_en_2.png" alt="Logo">
    </a>

@endsection


@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div id="hero" class="bg-img-hero img-bg">
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
                            <a class="btn btn-outline-light mt-4" href="#what" style="border-radius: 50px;">Learn more</a>
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

        <hr class="my-0">

        <!-- Mockup Section -->
        <div id="what" class="bg-gray-100">
            <div class="container space-2-top space-3-top--lg">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <div class="mb-5">
                        <span class="u-label u-label--sm u-label--purple mb-3">About Us</span>
                        <h2 class="h1">What is ExaCall ?</h2>
                        <p class="lead">Based and created in the <span class="text-success">Kingdom of Saudi Arabia</span>, ExaCall presents the most innovative solutions for telephone calls with a flexible and integrated system to serve companies and call center and enhance their business communication.</p>
                    </div>
                    <!-- Fancybox -->
                    {{--<a class="js-fancybox u-media-player" href="javascript:;"
                       data-src="https://www.youtube.com/watch?v=zQVagCHFGys"
                       data-speed="700"
                       data-animate-in="zoomIn"
                       data-animate-out="zoomOut"
                       data-caption="Space - Responsive Website Template">
                <span class="u-media-player__icon u-media-player__icon--xl u-media-player__icon--box-shadow">
                  <span class="fa fa-play u-media-player__icon-inner"></span>
                </span>
                    </a>--}}
                    <!-- End Fancybox -->
                </div>
                <!-- End Title -->

                <!-- SVG Mockup -->
                <div class="w-lg-80 mx-auto">
                    <img style="width: 100%;" src="assets/svg/mockups/mockup.png">
                </div>
                <!-- End SVG Mockup -->
            </div>
        </div>
        <!-- End Mockup Section -->

        <!-- Features Section -->
        <div id="solutions" class="container space-2 space-3--lg">
            <div class="row justify-content-lg-between">
                <div class="col-md-4 col-lg-4 mb-7 mb-md-0">
                    <div class="tab-vertical tab-vertical-md py-5 mr-lg-7">
                        <div class="pr-md-7 mb-5">
                            <h3 class="h4"></h3>
                        </div>
                        <!-- Tab Nav -->
                        <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a
                                    class="nav-link active tab-vertical__nav-link"
                                    id="v-pills-features-tab"
                                    data-toggle="pill"
                                    href="#v-pills-solutions"
                                    role="tab" aria-controls="v-pills-features"
                                    aria-selected="true">1. Solutions</a>

                            <a
                                    class="nav-link tab-vertical__nav-link"
                                    id="v-pills-company-tab"
                                    data-toggle="pill"
                                    href="#v-pills-services"
                                    role="tab" aria-controls="v-pills-company"
                                    aria-selected="false">2. Services</a>
                            <a
                                    class="nav-link tab-vertical__nav-link"
                                    id="v-pills-company-tab"
                                    data-toggle="pill"
                                    href="#v-pills-features"
                                    role="tab" aria-controls="v-pills-company"
                                    aria-selected="false">3. Features</a>
                        </div>
                        <!-- End Tab Nav -->
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Tab Content -->
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Solutions -->
                        <div class="tab-pane fade show active" id="v-pills-solutions" role="tabpanel" aria-labelledby="v-pills-features-tab">
                            <div class="row text-left">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/hire-us-red-icon.svg" alt="Image Description">
                                        <p>
                                            <b>Companies & Businesses :</b>
                                            <br>
                                        <p class="text-justify">For easier communication between employees, we provide entrepreneurs a contact management system for all business branches to facilitate employees to communicate with each other through internal direct extensions. We also provide the ability to connect and receive calls from anywhere</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service || -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/contacts-primary-icon.svg" alt="Image Description">
                                        <p>
                                            <b>Call Centers :</b>
                                            <br>
                                            <p class="text-justify">To get the best experience for your customer service and increase the productivity of your call center, we provide an innovative solution to manage calls and monitor your employees</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-key-benefits-tab">
                            <div class="row text-left">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/genious-purple-icon.svg" alt="Image Description">
                                        <p>
                                            <b>Universal Access Number (9200)</b>
                                            <br>
                                        <p class="text-justify">It’s provided for all businesses to connects all business branches to add more flexibility and for easier communicate with clients locally and internationally. And through 011 you can make outbounds calls easily</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service || -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-7 mb-3" src="/assets/svg/components/rain.svg" alt="Image Description">
                                        <p>
                                            <b>Cloud Central</b>
                                            <br>
                                        <p class="text-justify">An internal link to all  your business branches that allows employees to communicate with each other via internal direct numbers, and reach to a specific person by directly dialing his/her number from outside the organization. It allows to communicate and receive calls from anywhere</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="tab-pane fade" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-key-features-tab">
                            <div class="row text-left">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/collaborative-user-research-primary-icon.svg" alt="Image Description">
                                        <p class="text-justify">Manage users and monitor calls reports, recording and monitoring instantly</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/comments-dark-icon.svg" alt="Image Description">
                                        <p class="text-justify">Unlimited numbers of SIP channels to access to a particular employee, call forwarding and call conferencing to manage with participants</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/create-blue-icon.svg" alt="Image Description">
                                        <p class="text-justify">Record a message on hold and an IVR message that allow callers to select menu options using telephone keypad</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="/assets/svg/components/responsive-purple-icon.svg" alt="Image Description">
                                        <p class="text-justify">The ability to receive and make calls via laptops or through smart devices and tablets</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
        <!-- End Features Section -->

        <!-- Pricing Section -->
        <div class="bg-gray-100 mt-offset-9">
            <div class="container space-3-top space-2-bottom space-4-top--lg space-3-bottom--lg">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <span class="u-label u-label--sm u-label--purple mb-3">Pricing and Plans</span>
                    <h2>Multiple plans for you and competitive prices</h2>
                    <p>Get a flexible system professionally designed to manage your phone calls</p>
                </div>
                <!-- End Title -->

                <div class="row align-items-lg-center text-left">
                    <div class="col-md-6 col-lg-4 order-lg-2 offset-md-3 offset-lg-0 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-primary border rounded py-9 p-5">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="h5 text-white mb-0"><b>Basic</b></h4>
                                    <span class="u-label u-label--light u-label--sm">Recommended</span>
                                </div>
                                <p class="text-white">Suitable for Entrepreneurs</p>
                                {{--<div class="text-white mb-2">--}}
                                    {{--<span class="h1">999 SAR</span>--}}
                                    {{--<span>/ month</span>--}}
                                {{--</div>--}}
                                <ul style="padding-left: 10px;" class="list-unstyled text-white mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 8 Extensions</span>
                                        <span class="fa fa-info-circle text-white ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Extension is an id or a number to represent one of your employees or one of your departments"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 mr-3"></span>
                                        <span>Up to 7 Concurrent Calls </span>
                                        <span class="fa fa-info-circle text-white ml-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Concurrent Call is the number of received calls at the same time"></span>
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
                            </div>
                            <a href="/en/pricing" class="btn btn-block btn-sm btn-light">Contact us for quotation</a>
                        </div>
                        <!-- End Pricing -->
                    </div>

                    <div class="col-md-6 col-lg-4 order-lg-1 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h5 text-secondary mb-3"><b>Mini</b></h4>
                                <p>Suitable for Small Teams</p>
                                {{--<div class="mb-2">--}}
                                    {{--<span class="h1">599 SAR</span>--}}
                                    {{--<span>/ month</span>--}}
                                {{--</div>--}}
                                <ul style="padding-left: 10px;" class="list-unstyled mb-4">
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
                            </div>
                            <a href="/en/pricing" class="btn btn-block btn-sm btn-purple">Contact us for quotation</a>
                        </div>
                        <!-- End Pricing -->
                    </div>

                    <div class="col-md-6 col-lg-4 order-lg-3">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h5 text-secondary mb-3"><b>Custom</b></h4>
                                <p>Customize Your Plan</p>
                                {{--<div class="mb-2">--}}
                                    {{--<span class="h1 text-dark">Contact Us</span>--}}
                                {{--</div>--}}
                                <ul style="padding-left: 10px;" class="list-unstyled mb-4">
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
                            </div>
                            <a href="/en/pricing" class="btn btn-block btn-sm btn-purple">Contact us for quotation</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pricing Section -->

        <!-- Divider -->
        <div class="w-50 w-lg-35 mx-auto">
            <hr class="my-0">
        </div>
        <!-- End Divider -->

        <!-- Testimonials Section -->
        <div class="container space-2 space-3--lg">
            <div class="row justify-content-lg-center">
                <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
                    <!-- Testimonials -->
                    <div class="text-center px-lg-4">
                        <div class="mb-2">
                            <img class="u-avatar rounded-circle mx-auto mb-2" src="assets/img/100x100/sami_nana.jpg" alt="Image Description">
                            <h4 class="h6"><b>Sami Alhulwa</b></h4>
                            <h4 class="h6">CEO of Nana</h4>
                            <hr>
                        </div>
                        <blockquote class="text-secondary mb-0">It is a great opportunity to thank ExaCall team for providing a great flexible and efficient system for our calls management and call center, which it was suitable  for our own needs as well as their customer service team, they are always helpful and responsive</blockquote>
                    </div>
                    <!-- End Testimonials -->
                </div>

                <div class="col-md-6 col-lg-5">
                    <!-- Testimonials -->
                    <div class="text-center px-lg-4">
                        <div class="mb-2">
                            <img class="u-avatar rounded-circle mx-auto mb-2" src="assets/img/100x100/sami_smaat.jpeg" alt="Image Description">
                            <h4 class="h6"><b>Sami Alrushaid</b></h4>
                            <h4 class="h6">CEO of Smaat</h4>
                            <hr>
                        </div>
                        <blockquote class="text-secondary mb-0">We have been working with ExaCall a long time ago. It is one of the companies that is distinguished in its field. Where we found a high level and commitment</blockquote>
                    </div>
                    <!-- End Testimonials -->
                </div>
            </div>
        </div>
        <!-- End Testimonials Section -->

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