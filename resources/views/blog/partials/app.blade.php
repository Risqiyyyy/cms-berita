<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        {{ request()->is('/') ? 'FTnews' : ($post->title ?? 'FTnews') }}
    </title>
    <meta name="description" content="
        {{ request()->is('/') ? 'Welcome to FTnews, your source for the latest news and updates.' : ($post->description ?? 'FTnews description') }}
    ">
    <meta name="keywords" content="
        {{ request()->is('/') ? 'news, updates, FTnews' : ($post->keywords ?? 'news, updates, FTnews') }}
    ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="
        {{ request()->is('/') ? 'FTnews' : ($post->title ?? 'FTnews') }}
    ">
    <meta property="og:description" content="
        {{ request()->is('/') ? 'Welcome to FTnews, your source for the latest news and updates.' : ($post->description ?? 'FTnews description') }}
    ">
    <meta property="og:image" content="
        {{ 
            isset($post) && $post instanceof \Illuminate\Pagination\LengthAwarePaginator 
            ? (isset($post->data[0]->gambar) && is_string($post->data[0]->gambar) ? asset('storage/' . $post->data[0]->gambar) : asset('images/icon-ftnews.png'))
            : (isset($post->gambar) && is_string($post->gambar) ? asset('storage/' . $post->gambar) : asset('images/icon-ftnews.png'))
        }}
    ">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="FTnews">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="
        {{ request()->is('/') ? 'FTnews' : ($post->title ?? 'FTnews') }}
    ">
    <meta name="twitter:description" content="
        {{ request()->is('/') ? 'Welcome to FTnews, your source for the latest news and updates.' : ($post->description ?? 'FTnews description') }}
    ">
    <meta name="twitter:image" content="
        {{ 
            isset($post) && $post instanceof \Illuminate\Pagination\LengthAwarePaginator 
            ? (isset($post->data[0]->gambar) && is_string($post->data[0]->gambar) ? asset('storage/' . $post->data[0]->gambar) : asset('images/icon-ftnews.png'))
            : (isset($post->gambar) && is_string($post->gambar) ? asset('storage/' . $post->gambar) : asset('images/icon-ftnews.png'))
        }}
    ">

    <!-- Favicon and Manifest -->
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="{{ asset('/images/icon-ftnews.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/icon-ftnews.png') }}">

    <meta name="theme-color" content="#030303">

    <!-- Stylesheets and Scripts -->
    <script src="https://kit.fontawesome.com/60af0377a4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('./css/styles.css?537a1bbd0e5129401d28') }}" rel="stylesheet">
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
        @media (max-width: 767px) {
            .embed-container {
                display: none;
            }
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
