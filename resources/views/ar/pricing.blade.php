@extends('ar.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>الأسعار والباقات | اكسا كول</title>
    <meta name="description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="الأسعار والباقات | اكسا كول">
    <meta property="og:description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="الأسعار والباقات | اكسا كول"/>
    <meta name="twitter:description" content="نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية"/>
    <meta name="twitter:image" content="/assets/svg/logos/og_img_link.jpg" />

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
                            <h1 class="display-4 text-white">الأسعار والباقات</h1>
                            <p class="lead text-white">أعددنا لك باقات متعددة بأسعار منافسة</p>
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
                    <div class="js-slick-carousel u-slick u-slick--gutters"
                         data-slides-show="3"
                         data-slides-scroll="1"
                         data-pagi-classes="d-lg-none text-center u-slick__pagination mt-7 mb-0"
                         data-responsive='[{
                             "breakpoint": 1200,
                             "settings": {
                               "slidesToShow": 3
                             }
                           }, {
                             "breakpoint": 992,
                             "settings": {
                               "slidesToShow": 2
                             }
                           }, {
                             "breakpoint": 768,
                             "settings": {
                               "slidesToShow": 1
                             }
                           }, {
                             "breakpoint": 554,
                             "settings": {
                               "slidesToShow": 1
                             }
                           }]'>
                        <div class="js-slide">
                            <!-- Pricing -->
                            <div class="card border-0">
                                <!-- Header -->
                                <header class="card-header text-center p-5">
                                    <h4 class="h4">المخصصة</h4>
                                    <p>قم بتصميم الباقة الخاصة بك</p>
                                    <span class="d-block">
                                        <span class="display-4 text-dark">اتصل بنا</span>
                                    </span>
                                    <br/>
                                </header>
                                <!-- End Header -->
                                <!-- Content -->
                                <div class="card-body p-5">
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>أكثر من 10 تحويلات</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>أكثر من 5 مكالمات متزامنة</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 9200</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 011</span>
                                        </li>
                                    </ul>
                                    <a href="#order" class="btn btn-block btn-primary">اطلب الآن</a>
                                </div>
                                <!-- End Content -->
                            </div>
                            <!-- End Pricing -->
                        </div>

                        <div class="js-slide">
                            <!-- Pricing -->
                            <div class="card border-0">
                                <!-- Header -->
                                <header class="card-header text-center p-5">
                                    <h4 class="h4">الأساسية</h4>
                                    <p>مناسبة لرواد الأعمال</p>
                                    <span class="d-block">
                                        <span class="display-4 text-dark">750 ريال</span>
                                        <span class="d-block text-secondary font-size-14">تدفع شهريا</span>
                                    </span>
                                </header>
                                <!-- End Header -->
                                <!-- Content -->
                                <div class="card-body p-5">
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>تصل إلى 10 تحويلات</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>تصل إلى 5 مكالمات متزامنة</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 9200</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 011</span>
                                        </li>
                                    </ul>
                                    <a href="#order" class="btn btn-block btn-primary">اطلب الآن</a>
                                </div>
                                <!-- End Content -->
                            </div>
                            <!-- End Pricing -->
                        </div>

                        <div class="js-slide">
                            <!-- Pricing -->
                            <div class="card border-0">
                                <!-- Header -->
                                <header class="card-header text-center p-5">
                                    <h4 class="h4">المصغرة</h4>
                                    <p>مناسبة لفرق العمل الصغيرة</p>
                                    <span class="d-block">
                                        <span class="display-4 text-dark">400 ريال</span>
                                        <span class="d-block text-secondary font-size-14">تدفع شهريا</span>
                                    </span>
                                </header>
                                <!-- End Header -->
                                <!-- Content -->
                                <div class="card-body p-5">
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>تصل إلى 5 تحويلات</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>تصل إلى 3 مكالمات متزامنة</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 9200</span>
                                        </li>
                                        <li class="d-flex align-items-center py-2">
                                            <span class="fa fa-check font-size-13 ml-3"></span>
                                            <span>توفير رقم 011</span>
                                        </li>
                                    </ul>
                                    <a href="#order" class="btn btn-block btn-primary">اطلب الآن</a>
                                </div>
                                <!-- End Content -->
                            </div>
                            <!-- End Pricing -->
                        </div>

                    </div>
                </div>
                <!-- End Monthly -->
            </div>
        </div>
        <!-- End Pricing Section -->

        <!-- Pricing Table Section -->
        <div class="container space-2 space-3-bottom--lg">

            <!-- Entertainment Pricing Table Features -->
            <table class="table table-striped table-borderless table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col" class="py-5">
                            <span class="h4 font-weight-normal mb-0">تفاصيل الأسعار والمكالمات</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span>سعر الدقيقة للمكالمات المحلية</span>
                        </th>
                        <td><b>40 هللة</b></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span>سعر الدقيقة للمكالمات الدولية</span>
                        </th>
                        <td><a href="">جدول الأسعار حسب الدول</a></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span>سعر التحويلة</span>
                        </th>
                        <td><b>60 ريال</b></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span>سعر المكالمة المتزامنة</span>
                        </th>
                        <td><b>50 ريال</b></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span class="fa fa-angle-double-left font-size-13 ml-2"></span>
                            <span>في حال تم طلب 10 - 19 تحويلة فسعر التحويلة هو :</span>
                        </th>
                        <td><b>55 ريال</b></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">
                            <span class="fa fa-angle-double-left font-size-13 ml-2"></span>
                            <span>في حال تم طلب أكثر من 20 تحويلة فسعر التحويلة هو :</span>
                        </th>
                        <td><b>50 ريال</b></td>
                    </tr>
                </tbody>
            </table>
            <!-- End Entertainment Pricing Table Features -->

            <br/>

            <!-- Individual Pricing Table Features -->
            <table class="table table-striped table-borderless table-responsive-sm mb-9">
                <thead>
                <tr>
                    <th scope="col" class="py-5">
                        <span class="h4 font-weight-normal mb-0">الخصائص والمزايا</span>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">المصغرة</span>
                        <span class="d-block text-secondary font-weight-normal">400 ريال/شهر</span>
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">اطلب الان</a>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">الأساسية</span>
                        <span class="d-block text-secondary font-weight-normal">750 ريال/شهر</span>
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">اطلب الآن</a>
                    </th>
                    <th scope="col" class="py-5">
                        <span class="d-block font-weight-medium">المخصصة</span>
                        <span class="d-block text-secondary font-weight-normal">حسب تفاصيل الباقة</span>
                        <a class="btn btn-xs btn-primary py-1 px-2" href="#order">اطلب الآن</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="font-weight-normal">عدد التحويلات</th>
                        <td>5</td>
                        <td>10</td>
                        <td>حسب الطلب</td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">عدد المكالمات المتزامنة</th>
                        <td>3</td>
                        <td>5</td>
                        <td>حسب الطلب</td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">رقم موحد 9200</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">خط أرضي 011</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">إدارة المستخدمين والصلاحيات</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">التقارير</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">دعم فني علي مدار الساعة</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">تطبيق على اللابتوب والجوال</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">القائمة الصوتية IVR</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">المراقبة اللحظية</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">تسجيل المكالمات</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">الاستماع إلى المكالمات المسجلة</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">تحويل المكالمات</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">رسالة في وضعية الانتظار</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">اجتماعات هاتفية</th>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                        <td><span class="fa fa-check text-purple font-size-14"></span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-normal">مجموعات الاتصال</th>
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
        <div id="order" class="bg-img-hero img-bg" dir="rtl">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-100vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">

                        <!-- Big titles -->
                        <div class="col-lg-5 mb-7 mb-lg-0">
                            <!-- Title -->
                            <span class="d-block text-white mb-2">حلول الاتصال للشركات ومراكز الاتصال</span>
                            <h1 class="display-4 font-size-48--md-down text-justify text-white mb-0">قم بتقديم طلبك الآن وارفع من إنتاجية فريق علمك</h1>
                            <!-- End Title -->
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
                                            <input type="text" class="form-control form__input" name="name" required=""
                                                   placeholder="اسم مقدم الطلب"
                                                   aria-label="اسم مقدم الطلب">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Email - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group form">
                                            <input id="Email" type="email" class="form-control form__input" name="email" required=""
                                                   placeholder="البريد الإلكتروني"
                                                   aria-label="البريد الإلكتروني">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Phone - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="tel" class="form-control form__input" name="mobile" required=""
                                                   placeholder="رقم الجوال"
                                                   aria-label="رقم الجوال">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Website - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <input type="url" class="form-control form__input" name="website" required=""
                                                   placeholder="الموقع الإلكتروني للشركة"
                                                   aria-label="الموقع الإلكتروني للشركة">
                                        </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Company Size - Input -->
                                    <div class="js-form-message mb-3">
                                        <div class="js-focus-state input-group input-group form">
                                            <select type="phone" class="form-control form__input" name="size" required=""
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
        </div dir>
        <!-- End Hero Section -->

        <!-- CTA -->
        <div class="gradient-overlay-half-primary-v1" dir="rtl">
            <div class="bg-img-hero" style="background-color: #410954;">
                <div class="container">
                    <div class="row align-items-lg-center text-center text-lg-left space-2">
                        <div class="col-lg-12 text-center">
                            <h2 class="text-white"><b>اشترك في نشرتنا البريدية</b></h2>
                            <p class="lead text-white mb-5">تعلم الكثير من النصائح والأفكار لتحسين مستوى خدمة العملاء لديك وإدارة مركز الاتصال الخاص بك</p>
                        </div>
                        <div class="col-lg-12">
                            <form method="post" action="https://exacall.us18.list-manage.com/subscribe/post" class="form-inline d-flex justify-content-center">
                                <input type="hidden" name="u" value="c631c0419954e2c52b478dede">
                                <input type="hidden" name="id" value="3b3a65a8df">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">بريدك الإلكتروني</label>
                                    <input class="form-control" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="بريدك الإلكتروني">
                                </div>
                                <button type="submit" class="btn btn-light mb-2">اشترك الآن</button>
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