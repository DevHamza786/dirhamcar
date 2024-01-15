<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fav-icon.png') }}">
    <meta name="robots" content="index, follow">

    <meta name="google-site-verification" content="sNvvrTPxnRVJtVF1P8PeL16lxBX2L8qj2OD0FnwxYt4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link rel="stylesheet" href="{{ asset('/assets/css/frontcss/style.css') }}">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Slick/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Slick/slick.css')}}" /> 
    <title>Dirham Cars</title>
    <meta name="description"
        content="Accelerate Your Business Growth with simple, flexible and within your budget getting with Dirham Cars">
    @yield('styles')
    <style>
        .preloader {
    border: 8px solid #f3f3f3;
    border-top: 8px solid #3498db;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    display: none; /* Initially hide the preloader */
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    </style>
</head>

<body class="scrollbar">
    <div id="preloader" class="preloader"></div>

    {{-- header --}}
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="{{ asset('assets/Slick/slick.min.js') }}"></script> 
 <script src="{{ asset('assets/js/index.js') }}"></script> 




</body>

</html>
