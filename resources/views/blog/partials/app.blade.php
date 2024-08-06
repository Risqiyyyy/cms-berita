<html>

<head>
    <meta charset="utf-8">
    <title>FTnews</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('/images/icon-ftnews.png')}}">
    <link rel="shortcut icon" href="{{ asset('/images/icon-ftnews.png')}}">

    <meta name="theme-color" content="#030303">
    <script src="https://kit.fontawesome.com/60af0377a4.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('./css/styles.css?537a1bbd0e5129401d28')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
