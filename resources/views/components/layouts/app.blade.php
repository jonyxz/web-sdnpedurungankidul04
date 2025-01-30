<!DOCTYPE html>
<html lang="en">
<head>
<title>Kiddy &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="{{asset("assets/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/jquery.fancybox.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/fonts/flaticon/font/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

</head>
<body class="flex flex-col min-h-screen font-roboto">
    <main class="flex-grow">
        {{ $slot }}
    </main>
    @include('components.footer')
    <!-- Tambahkan skrip Anda di sini -->

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
