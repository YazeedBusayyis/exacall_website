@extends('en.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>FAQs | ExaCall</title>
    <meta name="description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta name="keywords" content="اتصالات,اكساكول,تحويل مكالمات,تسجيل مكالمات,سنترال سحابي,هاتف موحد,مجموعات اتصال,اجتماعات هاتفية,خط أرضي,مراقبة مكالمات,كول سنتر,voip,9200,011,call center,exa,exacall,Business,Startup,call,calls">
    <!--  OG -->
    <meta property="og:title" content="FAQs | ExaCall">
    <meta property="og:description" content="اكساء كول هي شركة تقدم أفضل الحلول المبتكرة للاتصالات الهاتفية بنظام مرن ومتكامل لتخدم من خلاله الشركات ومراكز الاتصال">
    <meta property="og:image" content="/assets/svg/logos/og_img_link.jpg">
    <meta property="og:url" content="https://www.exacall.com">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exacall"/>
    <meta name="twitter:title" content="FAQs | ExaCall" />
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
        <div class="row" dir="ltr">
            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">Can I use 011 outside Riyadh?</h4>
                    <p>You can have the benefits from the landline 011 service from anywhere.</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">Can the service be linked to a previous number for my facility?</h4>
                    <p>You can connect the service to your previous number and divert calls to your new number to answer them.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">Can I use WhatsApp on my unified number?</h4>
                    <p>It will be activated soon.</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">How long does it take to activate the service?</h4>
                    <p>It takes 2~3 days to activate the service.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">What are the subscription rates for ExaCall service?</h4>
                    <p>We offer you multiple packages for monthly or annual subscription. Click here: <a href="https://exacall.com/en/pricing">prices and packages</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">Can the service be activated without a Saudi Commercial Register or in personal.</h4>
                    <p>A valid commercial register of the establishment is required.</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">What are the services and features offered at ExaCall?</h4>
                    <p>You can find ExaCall services and features here : <a href="https://exacall.com/en/services">Solutions and services</a></p>
                </div>
            </div>
<!-- End Hero Section -->
            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">Who can I contact if I need help?</h4>
                    <p>All contact details are on this page: : <a href="https://exacall.com/en/contact-us">Contact Us</a></p>
                </div>
            </div>
<!-- End Hero Section -->
            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">Who can I contact if I need help?</h4>
                    <p>All contact details are on this page: <a href="https://www.exacall.com/contact-us">Contact Us</a></p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">What are the requirements of subscription?</h4>
                    <p>Valid commercial registration of the establishment, the identity of the owner of the establishment and a letter of authorization in case the site is not the general manager</p>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">What are the payment methods for subscription?</h4>
                    <p>Wire transfer, Paypal.</p>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">Is the service only for Saudi Arabia?</h4>
                    <p>You can subscribe to ExaCall wherever you are.</p>
                </div>
            </div>
            <!-- >
            <div class="w-100"></div>

            <div class="col-md-6 mb-5">
                <div class="pr-md-4">
                    <h4 class="h6 font-weight-bold">هل يمكن تجربة الخدمة قبل الاشتراك بها ؟ وكم مدة التجربة ؟</h4>
                    <p>نعم، بإمكانك تجربة الخدمة إلى مدة أسبوع.</p>
                </div>
            </div>
              <!-->
            <div class="col-md-6 mb-5">
                <div class="pl-md-4">
                    <h4 class="h6 font-weight-bold">How do I activate IVR?</h4>
                    <p>If you have a voice message, it will be activated directly for you.
If you wish to record an interactive voice message for you, a list of sounds will be sent to you to choose from to activate the service (Fee are applied for this service *).</p>
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
