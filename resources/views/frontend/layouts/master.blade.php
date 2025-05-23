<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>MyPlate</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="./assets/img/logo.png">
    <link rel="apple-touch-icon-precomposed" href="./assets/img/logo.png">

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            font-family: 'Poppins' !important;
        }
    </style>
    @stack('css')
</head>

<body class="body">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="pt-40 home-1">
            @include('frontend.components.header')

            @yield('content')

            @include('frontend.components.footer')
        </div>

        {{-- Modal --}}
    </div>
    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/tsparticles.min.js"></script>
    <script src="assets/js/tsparticles.js"></script>
    <script src="assets/js/main.js"></script>
    @stack('js')
</body>

</html>
