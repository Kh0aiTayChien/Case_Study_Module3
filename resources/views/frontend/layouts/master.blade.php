<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>HONEY LOVE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
{{--    <link href="{{asset('js/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.html">Honeylove</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        @include("frontend.layouts.core.navbar")
    </div>

</header><!-- End Header -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div
                class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up">
                <div>
                    <h1>HONEY LOVE</h1>
                    <h2>Bạn cần thuê bạn gái, bạn trai phục vụ nhu cầu chính đáng ? Liên hệ ngay với chúng tôi!</h2>
                    <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                    <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                 data-aos="fade-up">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>
<main id="main">
    @yield('content')
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<hr>
@include("frontend.layouts.core.footer")

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
{{--<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}}"></script>--}}
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script>
    FontAwesomeConfig = {familyPrefix: 'icon'}
</script>
{{--<script src="{{asset('https://use.fontawesome.com/releases/v5.0.13/js/all.js')}}"></script>--}}
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://kit.fontawesome.com/b1dbeafc85.js" crossorigin="anonymous"></script>
</body>

</html>
