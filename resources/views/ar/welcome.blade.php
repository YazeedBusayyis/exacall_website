@extends('ar.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>حلول الاتصال للشركات ومراكز الأعمال | اكسا كول</title>
    <meta name="description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="حلول الاتصال للشركات ومراكز الاتصال | اكسا كول">
    <meta property="og:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="حلول الاتصال للشركات ومراكز الاتصال | اكسا كول" />
    <meta name="twitter:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال"/>
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
        <div id="hero" class="bg-img-hero img-bg">
            <!-- Main Content -->
            <div class="d-lg-flex align-items-lg-center height-100vh--lg">
                <div class="container space-2 space-0--lg mt-lg-8">
                    <div class="row justify-content-lg-between align-items-lg-center">

                        <!-- Big titles -->
                         <!-- Title -->
                            <span class="d-block text-white mb-2">حلول الاتصال للشركات ومراكز الاتصال</span>
                            <h1 class="display-4 font-size-48--md-down text-white mb-0">النظام الأكثر مرونة لإدارة اتصالاتك ومراقبة أعمالك</h1>
                            <a class="btn btn-outline-light mt-4" href="https://exacall.com/registration/?page_id=22&lang=ar" style="border-radius: 50px;">تعرف أكثر علينا</a>
                            <!-- End Title -->

                        <!-- Order Form -->
                  		

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
                        <span class="u-label u-label--sm u-label--purple mb-3">تعرف علينا</span>
                        <h2 class="h1">ما هي اكساء كول ؟</h2>
                        <p class="lead" style="display: none;">هي شركة تقدم لك أفضل الحلول للاتصالات الهاتفية بنظام مرن ومتكامل بمزايا عديدة لتخدم من خلاله الشركات ومراكز الاتصال ومقرها <span class="text-success"><b>المملكة العربية السعودية</b></span></p>
                        <p class="lead">من قلب <span class="text-success"><b>المملكة العربية السعودية</b></span> تقدم شركة اكساء كول أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال</p>
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
                
                <br>
                <!-- Video -->
                     <div>
                    <video width="100%" height="500" controls>
                    <source src="https://exacall.com/ExaCall_video.MP4" type="video/mp4">
                    <source src="https://exacall.com/ExaCall_video.ogg" type="video/ogg">
                   Your browser does not support the video tag.
                          </video>
                    </div>
               
                <!-- End video -->     
                
                
                
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
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a
                                    class="nav-link active tab-vertical__nav-link"
                                    id="v-pills-features-tab"
                                    data-toggle="pill"
                                    href="#v-pills-solutions"
                                    role="tab" aria-controls="v-pills-features"
                                    aria-selected="true">1. الحلول</a>

                            <a
                                    class="nav-link tab-vertical__nav-link"
                                    id="v-pills-company-tab"
                                    data-toggle="pill"
                                    href="#v-pills-services"
                                    role="tab" aria-controls="v-pills-company"
                                    aria-selected="false">2. الخدمات</a>
                            <a
                                    class="nav-link tab-vertical__nav-link"
                                    id="v-pills-company-tab"
                                    data-toggle="pill"
                                    href="#v-pills-features"
                                    role="tab" aria-controls="v-pills-company"
                                    aria-selected="false">3. المميزات</a>
                        </div>
                        <!-- End Tab Nav -->
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Tab Content -->
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Solutions -->
                        <div class="tab-pane fade show active" id="v-pills-solutions" role="tabpanel" aria-labelledby="v-pills-features-tab">
                            <div class="row">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/hire-us-red-icon.svg" alt="Image Description">
                                        <p>
                                            <b>حلول الشركات والأعمال</b>
                                            <br>
                                        <p class="text-justify">لتواصل أسهل بين الموظفين نضع بين يدّي روّاد الأعمال نظام إدارة عمليات الاتصال لجميع فروع المنشأة يتيح للموظفين التواصل مع بعضهم عن طريق تحويلات داخلية مباشرة وإمكانية الاتصال واستقبال المكالمات من أي مكان</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service || -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/contacts-primary-icon.svg" alt="Image Description">
                                        <p>
                                            <b>حلول مراكز الاتصال</b>
                                            <br>
                                        <p class="text-justify">للوصول إلى أفضل تجربة لخدمة عملائك ورفع إنتاجية مركز الاتصال لديك، نقدم لك نظام بحلول مبتكرة لإدارة المكالمات ومراقبة موظفينك من أي مكان مع تقارير متقدمة</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-key-benefits-tab">
                            <div class="row">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/genious-purple-icon.svg" alt="Image Description">
                                        <p>
                                            <b>خدمة الرقم الموحد 9200</b>
                                            <br>
                                        <p class="text-justify">يربط الرقم الموحد جميع فروع منشأتك التجارية ليسهل وصول العملاء إليك، ومن خلال 011 تستطيع إصدار المكالمات بكل سهولة إلى من تشاء</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service || -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-7 mb-3" src="assets/svg/components/rain.svg" alt="Image Description">
                                        <p>
                                            <b>السنترال السحابي</b>
                                            <br>
                                        <p class="text-justify">ربط داخلي لجميع فروع منشأتك التجارية يتيح للعاملين التواصل مع بعضهم عن طريق أرقام داخلية مباشرة، والوصول إلى شخص معين داخل المنشأة عن طريق الاتصال على رقمه المباشر من خارج المنشأة. ويتيح إمكانية الاتصال واستقبال المكالمات من أي مكان.</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
								<div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-7 mb-3" src="assets/svg/components/team-dark-icon.svg" alt="Image Description">
                                        <p>
                                            <b>إدارة علاقات العملاء  (CRM)</b>
                                            <br>
                                        <p class="text-justify">التسويق والمبيعات وادارة المستودعات او المخازن وكذلك الدعم الفني, جميعها في منصّة واحدة 
										لتبسط لك الأعمال وتحلل لك بيانات العملاء المحتملين لمعرفة عملائك واحتياجاتهم وتفاعلاتك السابقة معهم
										 لإنشاء أفضل تجربة عملاء لك
										.</p>
                                        </p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="tab-pane fade" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-key-features-tab">
                            <div class="row">
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/collaborative-user-research-primary-icon.svg" alt="Image Description">
                                        <p class="text-justify">إدارة المستخدمين والصلاحيات ومتابعة تقارير المكالمات وتسجيلها ومراقبتها بشكل لحظي</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/comments-dark-icon.svg" alt="Image Description">
                                        <p class="text-justify">عدد لامحدود من الخطوط للوصول إلى عدد من الموظفين وتحويل المكالمات وإقامة الاجتماعات وإدارتها مع المشاركين</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/create-blue-icon.svg" alt="Image Description">
                                        <p class="text-justify"> تسجيل رسالة في وضعية الانتظار وتسجيل رسالة صوتية تفاعلية (IVR) تتيح للمتصلين تحديد خيارات القائمة من خلال لوحة مفاتيح الهاتف</p>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                                <!-- Service | -->
                                <div class="col-sm-6 mb-7 mb-sm-9">
                                    <!-- Icon Block -->
                                    <div class="pr-lg-4">
                                        <img class="max-width-9 mb-2" src="assets/svg/components/responsive-purple-icon.svg" alt="Image Description">
                                        <p class="text-justify">إمكانية استقبال وإجراء المكالمات عن طريق جهاز اللابتوب أو من خلال الأجهزة الذكية واللوحية</p>
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
                    <span class="u-label u-label--sm u-label--purple mb-3">الأسعار والباقات</span>
                    <h2>أعددنا لك باقات متعددة بأسعار منافسة</h2>
                    <p>امتلك نظام مرن مصمم بطريقة احترافية لإدارة اتصالاتك الهاتفية</p>
                </div>
                <!-- End Title -->
                <div class="row align-items-lg-center">
                    <div class="p-2 col-md-4 col-lg-3 order-lg-2 offset-md-3 offset-lg-0 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-primary border rounded py-9 p-5">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="h6 text-white mb-0">الأساسية</h4>
                                    <span class="u-label u-label--light u-label--sm">ننصح بها</span>
                                </div>
                                <p class="text-white">مناسبة لرواد الأعمال</p>
                                {{--<div class="text-white mb-2">--}}
                                    {{--<span class="h1">999 ريال</span>--}}
                                    {{--<span>/ شهريا</span>--}}
                                {{--</div>--}}
                                <ul style="padding-right: 10px;" class="list-unstyled text-white mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 8 تحويلات</span>
                                        <span class="fa fa-info-circle text-white mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="التحويلة هي عبارة عن معرف أو رقم يمثل أحد الموظفين أو أحد الأقسام"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 7 مكالمات متزامنة</span>
                                        <span class="fa fa-info-circle text-white mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="المكالمات المتزامنة هي عدد المكالمات المستقبلة في نفس الوقت"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تخزين المكالمات المسجلة لشهر</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>عرض سجل مكالمات متكامل</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>المكالمات مجانية بين التحويلات</span>
                                    </li>
                                </ul>
                                <div class="mb-2 text-center">
                                    <span class="card-price text-center" style="color:#FFF;">999 ريال</span>
                                    <span class="period" style="color:#FFF;">/ شهريا</span>
                                </div>
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-light">اطلب الخدمة الآن</a>
                        </div>
                        <!-- End Pricing -->            
                    </div>
                    <div class="p-2 col-md-4 col-lg-3 order-lg-1 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h6 text-secondary mb-3">مايكرو</h4>
                                <p>مناسبة للشركات الناشئة</p>
                                {{--<div class="mb-2">--}}
                                    {{--<span class="h1">299 ريال</span>--}}
                                    {{--<span>/ شهريا</span>--}}
                                {{--</div>--}}
                                <ul style="padding-right: 10px;" class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 3 تحويلات</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="التحويلة هي عبارة عن معرف أو رقم يمثل أحد الموظفين أو أحد الأقسام"></span>

                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 2 مكالمات متزامنة</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="المكالمات المتزامنة هي عدد المكالمات المستقبلة في نفس الوقت"></span>

                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تخزين المكالمات المسجلة لشهر</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>عرض سجل مكالمات متكامل</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>المكالمات مجانية بين التحويلات</span>
                                    </li>
                                </ul>
                                 <div class="mb-2 text-center">
                                    <span class="card-price text-center">299 ريال</span>
                                    <span class="period">/ شهريا</span>
                                </div>
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-purple">اطلب الخدمة الآن</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="p-2 col-md-4 col-lg-3 order-lg-1 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h6 text-secondary mb-3">المصغره</h4>
                                <p>مناسبة لفرق العمل الصغيرة</p>
                                <ul style="padding-right: 10px;" class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 5 تحويلات</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="التحويلة هي عبارة عن معرف أو رقم يمثل أحد الموظفين أو أحد الأقسام"></span>

                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تصل إلى 4 مكالمات متزامنة</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="المكالمات المتزامنة هي عدد المكالمات المستقبلة في نفس الوقت"></span>

                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تخزين المكالمات المسجلة لشهر</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>عرض سجل مكالمات متكامل</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>المكالمات مجانية بين التحويلات</span>
                                    </li>
                                    
                                </ul>
                                 <div class="mb-2 text-center">
                                    <span class="card-price text-center">599 ريال</span>
                                    <span class="period">/ شهريا</span>
                                </div>
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-purple">اطلب الخدمة الآن</a>
                        </div>
                        <!-- End Pricing -->
                    </div> 
                    <div class="p-2 col-md-4 col-lg-3 order-lg-3">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h6 text-secondary mb-3">المخصصة</h4>
                                <p>قم بتصميم الباقة الخاصة بك</p>
                                {{--<div class="mb-2">--}}
                                    {{--<span class="h1 text-dark">اتصل بنا</span>--}}
                                {{--</div>--}}
                                <ul style="padding-right: 10px;" class="list-unstyled mb-4">
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>أكثر من 8 تحويلات</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="التحويلة هي عبارة عن معرف أو رقم يمثل أحد الموظفين أو أحد الأقسام"></span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>أكثر من 7 مكالمات متزامنة</span>
                                        <span class="fa fa-info-circle text-secondary mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="المكالمات المتزامنة هي عدد المكالمات المستقبلة في نفس الوقت"></span>

                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 9200</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>توفير رقم 011</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>تخزين المكالمات المسجلة لشهر</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>عرض سجل مكالمات متكامل</span>
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="fa fa-check font-size-13 ml-3"></span>
                                        <span>المكالمات مجانية بين التحويلات</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-purple">اطلب الخدمة الآن</a>
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
                            <h4 class="h6"><b>سامي الحلوة</b></h4>
                            <h4 class="h6">المدير التنفيذي لشركة نعناع</h4>
                            <hr>
                        </div>
                        <blockquote class="text-secondary mb-0">"فرصة أكثر من رائعة لكي نقدم الشكر فيها لفريق اكسا كول على تقديمهم نظام لإدارة المكالمات ومركز التواصل الخاص بنا ذا مرونة وكفاءة عظيمة والذي بدوره كان ملائما لاحتياجاتنا الخاصة بالإضافة إلى فريق خدمة العملاء متعاون ومتجاوب دائما"</blockquote>
                    </div>
                    <!-- End Testimonials -->
                </div>

                <div class="col-md-6 col-lg-5">
                    <!-- Testimonials -->
                    <div class="text-center px-lg-4">
                        <div class="mb-2">
                            <img class="u-avatar rounded-circle mx-auto mb-2" src="assets/img/100x100/sami_smaat.jpeg" alt="Image Description">
                            <h4 class="h6"><b>سامي الرشيد</b></h4>
                            <h4 class="h6">المدير التنفيذي لشركة سماءات</h4>
                            <hr>
                        </div>
                        <blockquote class="text-secondary mb-0">"إننا نعمل مع شركة اكسا كول منذ وقت طويل، وهي من الشركات المميزة في مجالها. حيث وجدنا منها المستوى العالي والالتزام الكبير"</blockquote>
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
                            <h2 class="text-white"><b>اشترك في نشرتنا البريدية</b></h2>
                            <p class="lead text-white mb-5">تعلم الكثير من النصائح والأفكار لتحسين مستوى خدمة العملاء لديك وإدارة مركز الاتصال الخاص بك</p>
                        </div>
                        <div class="col-lg-12">
                            <form method="post" action="web.php" class="form-inline d-flex justify-content-center">
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
