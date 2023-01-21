<!doctype html>
<html lang="{{Config::get('app.locale')}}">

<head>
    @include('partials.meta')

    {{-- @yield('styles') --}}
    {{-- styles --}}
    <link href={{ url("assets/img/logo.svg") }} rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href={{ url("https://fonts.googleapis.com") }}>
    <link rel="preconnect" href={{ url("https://fonts.gstatic.com") }} crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href={{ url("assets/lib/owlcarousel/assets/owl.carousel.min.css") }} rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ url("assets/css/bootstrap.min.css") }} rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href={{ url("assets/css/style.css") }} rel="stylesheet">

    @yield('title')
</head>

<body>
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- /.site-preloader-wrap -->

    @include('partials.header')

    @yield('content')

    @include('partials.footer')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    {{-- @yield('scripts') --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src={{ url("assets/lib/easing/easing.min.js") }}></script>
    <script src={{ url("assets/lib/waypoints/waypoints.min.js") }}></script>
    <script src={{ url("assets/lib/owlcarousel/owl.carousel.min.js") }}></script>
    <script src={{ url("assets/js/main.js") }}></script>




    {{-- @include('cookieConsent::index') --}}
    {{-- <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fas fa-long-arrow-alt-up"></i> </a>
    </div> --}}
</body>

</html>
