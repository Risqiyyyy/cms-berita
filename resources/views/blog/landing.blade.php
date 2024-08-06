@extends('blog.partials.app')

@section('title', 'Akun')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapp__list__article-responsive wrapp__list__article-responsive-carousel">
                    @foreach ($postAll as $it)
                    <div class="item">
                        <!-- Post Article -->
                        <div class="card__post card__post-list">
                            <div class="image-sm">
                                <a href="{{ route('bytitle', $it->slug) }}">
                                    @if(!empty($it->gambar) && is_array($it->gambar) && count($it->gambar) > 0)
                                    <img src="{{ asset('storage/' . $it->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                    @endif 
                                </a>
                            </div>
                            <div class="card__post__body ">
                                <div class="card__post__content">

                                    <div class="card__post__author-info mb-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    By {{ $it->user->name }}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{ \Carbon\Carbon::parse($it->created_at)->isoFormat('DD MMMM, YYYY') }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__post__title">
                                        <h6>
                                            <a href="{{ route('bytitle', $it->slug) }}">
                                                {{ $it->title }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tranding news carousel -->

<!-- Popular news -->
<section>
    <!-- Popular news  header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 ">
                    <div class="card__post-carousel">
                        @foreach ($postAll as $all)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="{{ route('bytitle', $all->slug) }}">
                                    @if(!empty($all->gambar) && is_array($all->gambar) && count($all->gambar) > 0)
                                    <img src="{{ asset('storage/' . $all->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                    @endif 
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{ $all->kategori->nama_kategori }}
                                        </div>
                                        <div class="card__post__title">
                                            <h2>
                                                <a href="{{ route('bytitle', $all->slug) }}">
                                                    {{ $all->title }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        By {{ $all->user->name }}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ \Carbon\Carbon::parse($all->created_at)->isoFormat('DD MMMM, YYYY') }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="popular__news-right">
                        @foreach ($hedline as $item)
                        <div class="card__post ">
                            <div class="card__post__body card__post__transition">
                                <a href="{{ route('bytitle', $it->slug) }}">
                                    @if(!empty($item->gambar) && is_array($item->gambar) && count($item->gambar) > 0)
                                    <img src="{{ asset('storage/' . $item->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                    @endif 
                                </a>
                                <div class="card__post__content bg__post-cover">
                                    <div class="card__post__category">
                                        {{ $item->kategori->nama_kategori }}
                                    </div>
                                    <div class="card__post__title">
                                        <h5>
                                            <a href="{{ route('bytitle', $it->slug) }}">
                                                {{ $item->title }}</a>
                                        </h5>
                                    </div>
                                    <div class="card__post__author-info">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="./card-article-detail-v1.html">
                                                    By {{ $item->user->name }}
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD MMMM, YYYY') }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular news header-->
    <!-- Popular news carousel -->
    <div class="popular__news-header-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top__news__slider">
                        @foreach ($news as $item)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{ route('bytitle', $item->slug) }}">
                                        @if(!empty($item->gambar) && is_array($item->gambar) && count($item->gambar) > 0)
                                        <img src="{{ asset('storage/' . $item->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                        @endif 
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                                By {{ $item->user->name }}
                                            </span>,
                                        </li>

                                        <li class="list-inline-item">
                                            <span>
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD MMMM, YYYY') }}
                                            </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="{{ route('bytitle', $item->slug) }}">
                                            {{ $item->title }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Popular news carousel -->
</section>
<!-- End Popular news -->

<!-- Popular news category -->
<section class="pt-0">
    <div class="popular__section-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="wrapper__list__article">
                        <h4 class="border_section">Terkini</h4>
                    </div>
                    <div class="row ">
                        @foreach($latestPosts->take(2) as $post)
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body card__post__transition">
                                    <a href="{{ route('bytitle', $post->slug) }}">
                                        @if(!empty($post->gambar) && is_array($post->gambar) && count($post->gambar) > 0)
                                        <img src="{{ asset('storage/' . $post->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                        @endif 
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{ $post->kategori->nama_kategori }}
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="{{ route('bytitle', $post->slug) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('bytitle', $post->slug) }}">
                                                        by {{ $post->user->name }}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ $post->created_at->format('F d, Y') }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach($latestPosts->slice(2, 4) as $late)
                        <div class="col-sm-12 col-md-6">
                            <div class="wrapp__list__article-responsive">
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{ route('bytitle', $late->slug) }}">
                                                @if(!empty($late->gambar) && is_array($late->gambar) && count($late->gambar) > 0)
                                                <img src="{{ asset('storage/' . $late->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                                @endif 
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by {{ $late->user->name }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{ $late->created_at->format('F d, Y') }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{ route('bytitle', $late->slug) }}">
                                                            {{ $late->title }}
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>                
                <div class="col-md-12 col-lg-4">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Populer </h4>
                        <div class="wrapper__list-number">
                            @foreach ($populer as $i => $item)
                            <div class="card__post__list">
                                <div class="list-number">
                                    <span>
                                        {{ $i+1 }}
                                    </span>
                                </div>
                                <a href="{{ route('bycategory', $item->kategori->slug) }}" class="category">
                                    {{ $item->kategori->nama_kategori }}
                                </a>
                                <ul class="list-inline">
                                    <li class="list-inline-item">

                                        <h5>
                                            <a href="{{ route('bytitle', $it->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </h5>
                                    </li>
                                </ul>

                            </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!-- Post news carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <aside class="wrapper__list__article">
                    <h4 class="border_section">Teknologi</h4>
                </aside>
            </div>
            <div class="col-md-12">
                <div class="article__entry-carousel">
                    @foreach ($postteknology as $tek)
                    <div class="item">
                        <!-- Post Article -->
                        <div class="article__entry">
                            <div class="article__image">
                                <a href="{{ route('bytitle', $tek->slug) }}">
                                    @if(!empty($tek->gambar) && is_array($tek->gambar) && count($tek->gambar) > 0)
                                    <img src="{{ asset('storage/' . $tek->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                    @endif
                                </a>
                            </div>
                            <div class="article__content">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            by {{ $tek->user->name}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            {{ \Carbon\Carbon::parse($tek->created_at)->isoFormat('DD MMMM, YYYY') }}
                                        </span>
                                    </li>

                                </ul>
                                <h5>
                                    <a href="{{ route('bytitle', $tek->slug) }}">
                                        {{ $tek->title }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular news category -->

    <div class="text-center m-3">
        <a href="{{ route('bycategory', 'teknologi') }}" class="btn btn-outline-primary mb-4 text-capitalize">Read More teknologi</a>
    </div>


    <!-- Popular news category -->
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <aside class="wrapper__list__article mb-0">
                        <h4 class="border_section">lifestyle</h4>
                        <div class="row">
                            @foreach($postlifestyle as $post)
                            <div class="col-md-6 mb-4">
                                <div class="article__entry">
                                    <div class="article__image">
                                        {{-- {{ route('post.show', $post->id) }} --}}
                                        <a href="{{ route('bytitle', $post->slug) }}">
                                            @if(!empty($post->gambar) && is_array($post->gambar) && count($post->gambar) > 0)
                                            <img src="{{ asset('storage/' . $post->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    By {{ $post->user->name }}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    {{ $post->created_at->format('F d, Y') }}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            {{-- {{ route('post.show', $post->id) }} --}}
                                            <a href="{{ route('bytitle', $post->slug) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center m-3">
                            <a href="{{ route('bycategory', 'lifestyle') }}" class="btn btn-outline-primary mb-4 text-capitalize">Read More Lifestyle</a>
                        </div>
                    </aside>
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Olahraga</h4>

                        <div class="wrapp__list__article-responsive">
                            <!-- Post Article List -->
                            @foreach ($olahraga as $item)
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="{{ route('bytitle', $item->slug) }}">
                                                @if(!empty($item->gambar) && is_array($item->gambar) && count($item->gambar) > 0)
                                                <img src="{{ asset('storage/' . $item->gambar[0]) }}" alt="Gambar" class="img-fluid">
                                                @endif
                                                {{-- <img src="{{ asset('storage/' . $item->gambar) }}"
                                                    class=" {{ $item->title }}" alt=""> --}}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    {{ $item->kategori->nama_kategori }}
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                By {{ $item->user->name }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('DD MMMM, YYYY') }}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="{{ route('bytitle', $item->slug) }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h5>
                                                    @php
                                                    $content = str_replace('&nbsp;', ' ',
                                                    strip_tags($item->content));
                                                    $words = explode(' ', $content);
                                                    if (count($words) > 3) {
                                                    $truncated = implode(' ', array_slice($words, 0, 35)) . '...';
                                                    } else {
                                                    $truncated = $content;
                                                    }
                                                    @endphp

                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        {{ $truncated }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center m-3">
                            <a href="{{ route('bycategory', 'olahraga') }}" class="btn btn-outline-primary mb-4 text-capitalize">Read More Olahraga</a>
                        </div>
                    </aside>
                </div>

                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">stay conected</h4>
                            <!-- widget Social media -->
                            <div class="wrap__social__media">
                                <a href="#" target="_blank">
                                    <div class="social__media__widget facebook">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-facebook"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            19,243 fans
                                        </span>
                                        <span class="social__media__widget-name">
                                            like
                                        </span>
                                    </div>
                                </a>
                                <a href="#" target="_blank">
                                    <div class="social__media__widget twitter">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-twitter"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            2.076 followers
                                        </span>
                                        <span class="social__media__widget-name">
                                            follow
                                        </span>
                                    </div>
                                </a>
                                <a href="#" target="_blank">
                                    <div class="social__media__widget youtube">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-youtube"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            15,200 followers
                                        </span>
                                        <span class="social__media__widget-name">
                                            subscribe
                                        </span>
                                    </div>
                                </a>

                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">tags</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">
                                    @foreach ($tags as $t)
                                    <li class="list-inline-item">
                                        <a href="{{ route('bytags', $t->slug) }}">
                                            #{{ $t->nama_tags }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>

                        {{-- <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/placeholder/600x400.jpg" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </aside> --}}

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">newsletter</h4>
                            <!-- Form Subscribe -->
                            <div class="widget__form-subscribe bg__card-shadow">
                                <h6>
                                    Subscribe
                                </h6>
                                <p><small>Get ftnews.co.id daily newsletter on your inbox.</small></p>
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Your email address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">I want in</button>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                {{-- <div class="mx-auto">
                    <!-- Pagination -->
                    <div class="pagination-area">
                        <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <a href="#">
                                «
                            </a>
                            <a href="#">
                                1
                            </a>
                            <a class="active" href="#">
                                2
                            </a>
                            <a href="#">
                                3
                            </a>
                            <a href="#">
                                4
                            </a>
                            <a href="#">
                                5
                            </a>

                            <a href="#">
                                »
                            </a>
                        </div>
                    </div>
                </div> --}}

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular news category -->

@include('blog.partials.footer')
@endsection
