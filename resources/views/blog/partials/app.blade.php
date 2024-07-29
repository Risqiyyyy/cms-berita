<html>

<head>
    <meta charset="utf-8">
    <title>FTnews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('/images/icon-ftnews.png')}}">
    <link rel="shortcut icon" href="{{ asset('/images/icon-ftnews.png')}}">
    <!-- Meta SEO -->
    @if(!empty($metaDescription))
    <meta name="description" content="{{ $metaDescription }}">
    @endif

    @if(!empty($metakeyword))
    <meta name="keywords" content="{{ $metakeyword }}">
    @endif

    <meta name="author" content="FTNews">

    <!-- Open Graph / Facebook -->
    @if(!empty($ogTitle))
    <meta property="og:title" content="{{ $ogTitle }}">
    @endif

    @if(!empty($ogDescription))
    <meta property="og:description" content="{{ $ogDescription }}">
    @endif

    @if(!empty($ogImage))
    <meta property="og:image" content="{{ $ogImage }}">
    @endif

    @if(!empty($ogImageAlt))
    <meta property="og:image:alt" content="{{ $ogImageAlt }}">
    @endif

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">

    @if(!empty($twitterTitle))
    <meta name="twitter:title" content="{{ $twitterTitle }}">
    @endif

    @if(!empty($twitterDescription))
    <meta name="twitter:description" content="{{ $twitterDescription }}">
    @endif

    @if(!empty($twitterImage))
    <meta name="twitter:image" content="{{ $twitterImage }}">
    @endif

    @if(!empty($twitterImageAlt))
    <meta name="twitter:image:alt" content="{{ $twitterImageAlt }}">
    @endif

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <meta name="theme-color" content="#030303">
    <script src="https://kit.fontawesome.com/60af0377a4.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('./css/styles.css?537a1bbd0e5129401d28')}}" rel="stylesheet">
    <style>
        .nav-item.dropdown {
            position: relative;
        }

        .nav-item .main-link {
            display: inline-block;
        }

        .nav-item .sub-link {
            position: absolute;
            right: 0;
            top: 0;
            width: 20px;
            height: 100%;
            background: none;
            border: none;
            padding: 0;
            display: inline-block;
            cursor: pointer;
        }

    </style>

</head>

<body>
    <div>
        @include('blog.partials.header')
        <div>
            @yield('content')
        </div>
    </div>
    @include('blog.partials.master-js')
</body>

</html>
