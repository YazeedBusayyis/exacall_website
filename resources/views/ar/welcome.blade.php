@extends('ar.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>حلول الاتصال للشركات ومراكز الأعمال | اكسا كول</title>
    <meta name="description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta name="keywords" content="">
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
                            <!-- Title -->
                            <span class="d-block text-white mb-2">حلول الاتصال للشركات ومراكز الاتصال</span>
                            <h1 class="display-4 font-size-48--md-down text-justify text-white mb-0">النظام الأكثر مرونة لإدارة اتـصــالاتــك ومراقبة أعمالك</h1>
                            <a class="btn btn-outline-light mt-4" href="#what" style="border-radius: 50px;">تعرف أكثر علينا</a>
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
                    <a class="js-fancybox u-media-player" href="javascript:;"
                       data-src="https://www.youtube.com/watch?v=zQVagCHFGys"
                       data-speed="700"
                       data-animate-in="zoomIn"
                       data-animate-out="zoomOut"
                       data-caption="Space - Responsive Website Template">
                <span class="u-media-player__icon u-media-player__icon--xl u-media-player__icon--box-shadow">
                  <span class="fa fa-play u-media-player__icon-inner"></span>
                </span>
                    </a>
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
                                        <p class="text-justify">للوصول إلى أفضل تجربة لخدمة عملائك ورفع إنتاجية مركز الاتصال لديك، نقدم لكم نظام بحلول مبتكرة لإدارة المكالمات ومراقبة موظفينك من أي مكان مع تقارير متقدمة</p>
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
                                        <p class="text-justify">يربط الرقم الموحد جميع فروع منشأتك التجارية ليسهل وصول العملاء إليك، ومن خلال 011 يستطيع عملائك الاتصال بالرقم واستخدامه في إصدار مكالمات للعملاء</p>
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
                    <div class="col-md-6 col-lg-4 order-lg-2 offset-md-3 offset-lg-0 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-primary border rounded py-9 p-5">
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="h6 text-white mb-0">الأساسية</h4>
                                    <span class="u-label u-label--light u-label--sm">ننصح بها</span>
                                </div>
                                <p class="text-white">مناسبة لرواد الأعمال</p>
                                <div class="text-white mb-2">
                                    <span class="h1">750 ريال</span>
                                    <span>/ شهريا</span>
                                </div>
                                <ul class="list-unstyled text-white mb-4">
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
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-light">للمزيد من التفاصيل</a>
                        </div>
                        <!-- End Pricing -->
                    </div>

                    <div class="col-md-6 col-lg-4 order-lg-1 mb-5 mb-md-0">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h6 text-secondary mb-3">المصغرة</h4>
                                <p>مناسبة لفرق العمل الصغيرة</p>
                                <div class="mb-2">
                                    <span class="h1">400 ريال</span>
                                    <span>/ شهريا</span>
                                </div>
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
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-purple">للمزيد من التفاصيل</a>
                        </div>
                        <!-- End Pricing -->
                    </div>

                    <div class="col-md-6 col-lg-4 order-lg-3">
                        <!-- Pricing -->
                        <div class="bg-white border rounded py-7 p-5">
                            <div class="mb-4">
                                <h4 class="h6 text-secondary mb-3">المخصصة</h4>
                                <p>قم بتصميم الباقة الخاصة بك</p>
                                <div class="mb-2">
                                    <span class="h1 text-dark">اتصل بنا</span>
                                </div>
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
                            </div>
                            <a href="/pricing" class="btn btn-block btn-sm btn-purple">للمزيد من التفاصيل</a>
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
                        <blockquote class="text-secondary mb-0">"هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق."</blockquote>
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
                        <blockquote class="text-secondary mb-0">"هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق."</blockquote>
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