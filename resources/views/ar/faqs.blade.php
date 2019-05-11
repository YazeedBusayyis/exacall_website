@extends('ar.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>الأسئلة المتكررة | اكسا كول</title>
    <meta name="description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="الأسئلة المتكررة | اكسا كول">
    <meta property="og:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="الأسئلة المتكررة | اكسا كول" />
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

    <!-- Hero Section -->
    <div class="gradient-half-primary-v1">
        <div class="bg-img-hero img-bg" style="background-color: #920bc0;">
            <div class="container space-2 space-4-top--lg space-3-bottom--lg">
                <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <!-- Title -->
                    <div class="mb-4">
                        <h1 class="display-4 text-white">الأسئلة المتكررة</h1>
                        <p class="lead text-white"></p>
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

    <br>

    <!-- FAQ Section -->
    <div class="container space-2-bottom mt-9">

        <!-- FAQ -->
        <div class="row" dir="rtl">
            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن استخدام رقم 011 خارج الرياض ؟</h4>
                    <p>بإمكانك الاستفادة من خدمة الخط الأرضي 011 من أي مكان</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن ربط الخدمة برقم سابق لمنشأتي ؟</h4>
                    <p>بإمكانك ربط الخدمة برقمك السابق وتحويل المكالمات على رقمك الجديد للرد عليها</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن استخدام "الواتس آب" على رقمي الموحد ؟</h4>
                    <p>سيتم تفعيلها قريبًا.</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">كم الوقت المستغرق لتفعيل الخدمة ؟</h4>
                    <p>يستغرق الوقت لتفعيل الخدمة من يومين إلى ثلاثة أيام.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">ماهي أسعار الاشتراك في خدمة اكسا كول ؟</h4>
                    <p>خصصّنا لك باقات متعددة للاشتراك الشهري أو السنوي من هنا : <a href="https://exacall.com/pricing">الأسعار والباقات</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن تفعيل الخدمة بدون سجل تجاري سعودي أو بشكل شخصي ؟</h4>
                    <p>يشترط وجود سجل تجاري ساري المفعول خاص بالمنشأة.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">ماهي الخدمات والميزات المقدمة في اكسا كول ؟</h4>
                    <p>بإمكانك الاطلاع على خدمات اكسا كول ومميزاتها من هُنا : <a href="https://www.exacall.com/services">الحلول والخدمات</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">كيف أبدأ بطلب الخدمة ؟</h4>
                    <p>بإمكانك طلب الخدمة الآن عبر إدخال بياناتك هُنا : <a href="https://www.exacall.com/contact-us">اتصل بنا</a></p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">مع من أتواصل إذا احتجت إلى مساعدة ؟</h4>
                    <p>جميع بيانات التواصل موجودة في هذه الصفحة : <a href="https://www.exacall.com/contact-us">اتصل بنا</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">ماهي شروط الاشتراك ؟</h4>
                    <p>سجل تجاري ساري المفعول خاص بالمنشأة و هوية صاحب المنشأة و خطاب تفويض في حال كان الموقع غير المدير العام</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">ماهي طرق الدفع للاشتراك ؟</h4>
                    <p>حوالة بنكية، باي بال</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">هل الخدمة مخصصة داخل السعودية فقط ؟</h4>
                    <p>بإمكانك الاشتراك في خدمة اكسا كول أينما كُنت.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن تجربة الخدمة قبل الاشتراك بها ؟ وكم مدة التجربة ؟</h4>
                    <p>نعم، بإمكانك تجربة الخدمة إلى مدة أسبوع.</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">كيف أفعّل خدمة الرسالة الصوتية التفاعلية (IVR) ؟</h4>
                    <p>إذا كانت الرسالة الصوتية متوفرة لديك فسيتم تفعيلها مباشرة لك.<br> أما إذا كنت ترغب بتسجيل رسالة صوتية تفاعلية مخصصة لك، فسيتم إرسال قائمة لك من الأصوات للاختيار منها للبدء بتفعيل الخدمة ( هذه الخدمة برسوم * ).</p>
                </div>
            </div>

        </div>
        <!-- End FAQ -->
    </div>
    <!-- End FAQ Section -->

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

@endsection