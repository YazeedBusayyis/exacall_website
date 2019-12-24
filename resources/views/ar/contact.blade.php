@extends('ar.master')

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

@section('logo')

    <a class="navbar-brand u-header__navbar-brand" href="https://www.exacall.com" aria-label="Space">
        <img class="u-header__navbar-brand-default logo" src="assets/svg/logos/exacall_logo_white_2.png" alt="Logo">
        <img class="u-header__navbar-brand-on-scroll logo" src="assets/svg/logos/exacall_logo_2.png" alt="Logo">
        <img class="u-header__navbar-brand-mobile" src="assets/svg/logos/exacall_logo_2.png" alt="Logo">
    </a>

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
                        <div class="col-lg-5 mb-7 mb-lg-0">
                            <h1 class="text-white"><b>اتصل بنا</b></h1>
                            <h2 class="h4 text-white">الرياض ، المملكة العربية السعودية</h2>
                            <span class="d-block text-white">المكتب الرئيسي</span>

                            <hr class="my-5">

                            <address>
                                <!-- Contacts List -->
                                <ul class="list-unstyled text-secondary" style="padding-right: 0px;">
                                    <li class="media align-items-center pb-2">
                                        <span class="fa fa-location-arrow ml-3 text-white"></span>
                                        <div class="media-body text-white">طريق عثمان بن عفان ، حي التعاون ، شركة اكساء لتقنية المعلومات</div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-calendar-alt ml-3 text-white"></span>
                                        <div class="media-body text-white">من الأحد إلى الخميس : من الساعة ٩ صباحا إلى ٥ مساء </div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-phone ml-3 text-white"></span>
                                        <div class="media-body text-white">للاتصال : 920033120</div>
                                    </li>

                                    <li class="media align-items-center py-2">
                                        <span class="fa fa-envelope ml-3 text-white"></span>
                                        <div class="media-body text-white">المبيعات:</div>
                                        <div class="media-body text-white" >sales@exacall.com</div>
                                        <div class="media-body text-white">الدعم الفني:support@exacall.com </div>

                                        
                                    </li>
                                </ul>
                                <!-- End Contacts List -->
                            </address>

                        </div>

                        <!-- Order Form -->
                        <div class="col-lg-5">
                            <!-- Signup Form -->
                            <div class="bg-white shadow-sm rounded p-6">
                                <form method="post" action="/submit_new_order" class="js-validate">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="mb-4">
                                        <h2 class="h4">لا تفوت مكالمة بعد اليوم .. !</h2>
                                    </div>

                                    <!-- Name - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group form">
                                            <input type="text" class="form-control form__input" name="name" required
                                                   placeholder="اسم مقدم الطلب"
                                                   aria-label="اسم مقدم الطلب">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Email - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group form">
                                            <input id="Email" type="email" class="form-control form__input" name="email" required
                                                   placeholder="البريد الإلكتروني"
                                                   aria-label="البريد الإلكتروني">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Phone - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="tel" class="form-control form__input" name="mobile" required
                                                   placeholder="رقم الجوال"
                                                   aria-label="رقم الجوال">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Website - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="url" class="form-control form__input" name="website" required
                                                   placeholder="الموقع الإلكتروني للشركة"
                                                   aria-label="الموقع الإلكتروني للشركة">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Company Size - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <select type="phone" class="form-control form__input" name="size" required
                                                    placeholder="حجم الشركة"
                                                    aria-label="حجم الشركة">
                                                <option disabled selected>حجم الشركة</option>
                                                <option value="1">أعمل لوحدي</option>
                                                <option value="2 - 10">من 2 - 10</option>
                                                <option value="11 - 50">من 11 - 50</option>
                                                <option value="51 - 100">من 51 - 100</option>
                                                <option value="+ 100">أكثر من 100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <button id="orderNow" type="submit" class="btn btn-block btn-primary">قدم طلبك الآن</button>
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
