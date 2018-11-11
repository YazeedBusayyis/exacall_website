@extends('en.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>اتصل بنا | اكسا كول</title>
    <meta name="description" content="تواصل معنا للحصول على النظام الأكثر مرونة لإدارة اتصالاتك ومراقبة أعمالك">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="اتصل بنا | اكسا كول">
    <meta property="og:description" content="تواصل معنا للحصول على النظام الأكثر مرونة لإدارة اتصالاتك ومراقبة أعمالك">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="اتصل بنا | اكسا كول"/>
    <meta name="twitter:description" content="تواصل معنا للحصول على النظام الأكثر مرونة لإدارة اتصالاتك ومراقبة أعمالك"/>
    <meta name="twitter:image" content="/assets/svg/logos/og_img_link.jpg" />

@endsection

@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">

        <!-- Hero Section -->
        <div class="bg-img-hero img-bg">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-100vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">

                        <!-- Big titles -->
                        <div class="col-lg-5 mb-7 mb-lg-0 text-left">
                            <h1 class="text-white"><b>Contact Us</b></h1>
                            <h2 class="h4 text-white">Saudi Arabia , Riyadh</h2>
                            <span class="d-block text-white">Head Office</span>

                            <hr class="my-5">

                            <address>
                                <!-- Contacts List -->
                                <ul class="list-unstyled text-secondary" style="padding-right: 0px;">
                                    <li class="media align-items-center pb-2">
                                        <span class="fa fa-location-arrow mr-3 text-white"></span>
                                        <div class="media-body text-white">Exa Information Technology Co. Ltd. - Othman Bin Affan Branch Rd, Al-Taawon, Riyadh</div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-calendar-alt mr-3 text-white"></span>
                                        <div class="media-body text-white">Sunday to Thursday , from 9:00 AM to 5:00 PM</div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-phone mr-3 text-white"></span>
                                        <div class="media-body text-white">Call Us : 920033120</div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-envelope mr-3 text-white"></span>
                                        <div class="media-body text-white">Sales : voip.sales@exaserve.com</div>
                                        <div class="media-body text-white">Support : voip.support@exaserve.com</div>
                                    </li>
                                </ul>
                                <!-- End Contacts List -->
                            </address>

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

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

@endsection