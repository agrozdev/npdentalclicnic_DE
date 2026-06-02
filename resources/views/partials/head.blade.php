@php
    $brand = config('site.brand');
    $titleText = isset($title) ? $title.' | '.$brand : $brand.' — '.config('site.tagline');
    $descText = $description ?? config('site.tagline');
@endphp
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ0EC34JEL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BJ0EC34JEL');
</script>
<meta name="description" content="{{ $descText }}">
<meta name="keywords" content="dental implants UK, clear aligners UK, dental tourism Bulgaria, Bulgaria dentist, NP Dental Clinic">
<meta name="author" content="{{ $brand }}">
<meta name="google-site-verification" content="Ap0vBBSLVTZ57Qs-NZUpsyRWEXRzNhpC2FA4h7QP0xw" />

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $titleText }}">
<meta property="og:description" content="{{ $descText }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="{{ $brand }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $titleText }}">
<meta name="twitter:description" content="{{ $descText }}">

<title>{{ $titleText }}</title>

<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
<link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
<link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/twentytwenty.css') }}">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
<link href="{{ asset('css/dental-site.css') }}" rel="stylesheet" media="screen">
