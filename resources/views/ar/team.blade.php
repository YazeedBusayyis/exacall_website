@extends('ar.master')

@section('meta')

    <!--  Essential META Tags -->
    <title>فريق العمل | اكسا كول</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="">

    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name" content="">
    <meta name="twitter:image:alt" content="">

    <!--  Non-Essential, But Required for Analytics -->
    <meta name="twitter:site" content="">

@endsection

@section('content')

    <!-- Hero Section -->
    <div class="gradient-half-primary-v1">
        <div class="bg-img-hero img-bg" style="background-color: #920bc0;">
            <div class="container space-2 space-4-top--lg">
                <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <!-- Title -->
                    <div class="mb-9">
                        <h1 class="display-4 text-white">فريق العمل</h1>
                        <p class="lead text-white">نحن نسعى دائما لبذل المزيد وعدم التوقف في التحسن والتعلم المستمر</p>
                    </div>
                    <!-- End Title -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- -->
    <div class="container space-2 space-3--lg" dir="rtl">

        <div class="row mb-9">
            <div class="col-6 col-lg-3 mb-7 mb-lg-0">
                <!-- Team -->
                <div class="text-center">
                    <img class="u-lg-avatar shadow-lg rounded-circle mx-auto mb-4" src="assets/img/100x100/img1.jpg" alt="Image Description">
                    <h4 class="h5"><b>اسم الموظف</b></h4>
                    <span class="d-block">المنصب الوظيفي</span>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-6 col-lg-3">
                <!-- Team -->
                <div class="text-center">
                    <img class="u-lg-avatar shadow-lg rounded-circle mx-auto mb-4" src="assets/img/100x100/img1.jpg" alt="Image Description">
                    <h4 class="h5"><b>اسم الموظف</b></h4>
                    <span class="d-block">المنصب الوظيفي</span>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-6 col-lg-3">
                <!-- Team -->
                <div class="text-center">
                    <img class="u-lg-avatar shadow-lg rounded-circle mx-auto mb-4" src="assets/img/100x100/img1.jpg" alt="Image Description">
                    <h4 class="h5"><b>اسم الموظف</b></h4>
                    <span class="d-block">المنصب الوظيفي</span>
                </div>
                <!-- End Team -->
            </div>

            <div class="col-6 col-lg-3 mb-7 mb-lg-0">
                <!-- Team -->
                <div class="text-center">
                    <img class="u-lg-avatar shadow-lg rounded-circle mx-auto mb-4" src="assets/img/100x100/img1.jpg" alt="Image Description">
                    <h4 class="h5"><b>اسم الموظف</b></h4>
                    <span class="d-block">المنصب الوظيفي</span>
                </div>
                <!-- End Team -->
            </div>

        </div>

        <!-- Link -->
        <div class="text-center">
            <br><br>
            <a class="btn btn-primary btn-wide" href="../pages/careers.html">انضم لنا</a>
        </div>
        <!-- End Link -->
    </div>
    <!-- -->

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