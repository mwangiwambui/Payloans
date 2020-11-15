<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payloan - Banking & Business Loan HTML5 Responsive Template</title>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include All CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/payloan-icon.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/icofont.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/settings.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}//css/owl.theme.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/preset.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/theme.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('payloan') }}/css/responsive.css"/>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('payloan') }}/images/favicon.png">
</head>
<body>
@include('layouts.header')
@yield('content')

@include('layouts.footer')
</body>
<!-- Include All JS -->
<script src="{{ asset('payloan') }}/js/jquery.js"></script>
<script src="{{ asset('payloan') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('payloan') }}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('payloan') }}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('payloan') }}/js/jquery-ui.js"></script>
<script src="{{ asset('payloan') }}/js/shuffle.js"></script>
<script src="{{ asset('payloan') }}/js/slick.js"></script>
<script src="{{ asset('payloan') }}/js/gmaps.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCysDHE3s4Qw3nTh9o58-2mJcqvR6HV8Kk"></script>
<script src="{{ asset('payloan') }}/js/owl.carousel.js"></script>
<script src="{{ asset('payloan') }}/js/theme.js"></script>
</body>
</html>
