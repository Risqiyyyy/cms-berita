@extends('blog.partials.app')

{{-- @section('title', 'Akun') --}}

@section('content')

    <section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- content article detail -->
                    <!-- Article Detail -->
                    <div class="wrap__article-detail">
                        <div class="wrap__article-detail-title">
                            <h1>
                                {{ $post->title }}
                            </h1>
                        </div>
                        <hr>
                        <div class="wrap__article-detail-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <figure class="image-profile">
                                        @if(!empty($post->gambar) && is_array($post->gambar))
                                            @foreach($post->gambar as $gambar)
                                                <p>{{ asset('storage/' . $gambar) }}</p>
                                                <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar" class="img-fluid">
                                            @endforeach
                                        @endif
                                    </figure>                                   
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        By
                                    </span>
                                    <a href="#">
                                       {{ $post->user->name }}
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('DD MMMM, YYYY') }}
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="wrap__article-detail-image mt-4">
                            <figure>
                                @if(!empty($post->gambar) && is_array($post->gambar))
                                @foreach($post->gambar as $gambar)
                                    <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar" class="img-fluid">
                                @endforeach
                            @endif
                            </figure>
                        </div>
                        <div class="wrap__article-detail-content">
                            <div class="total-views">
                                <ul class="list-inline">
                                    <span class="share">share on:</span>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o facebook" id="share-facebook" href="#">
                                            <i class="fa fa-facebook-f"></i>
                                            <span>facebook</span>
                                        </a>

                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o text-black x-twitter" id="share-twitter" href="#">
                                            <i class="fa fa-x-twitter"></i>
                                            <span>twitter</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o whatsapp" id="share-whatsapp" href="#">
                                            <i class="fa fa-whatsapp"></i>
                                            <span>whatsapp</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="has-drop-cap-fluid">
                                {!! preg_replace('/\[caption[^\]]*\](.*?)\[\/caption\]/s', '$1', $post->content) !!}
                            </p>                      
                        </div>


                    </div>
                    <!-- end content article detail -->

                    <!-- tags -->
                    <!-- News Tags -->
                    <div class="blog-tags">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-tags">
                                </i>
                            </li>
                            @foreach ($tagsdetail as $tagdet)
                            <li class="list-inline-item">
                                <a href="{{ route('bytags', $tagdet->slug) }}">
                                    #{{ $tagdet->nama_tags}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end tags-->

                </div>
                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article ">
                            <h4 class="border_section">Populer</h4>
                            <div class="wrapper__list__article-small">
                                @foreach ($populer as $item)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{ route('bytitle', $item->slug) }}">
                                                @if(!empty($item->gambar) && is_array($item->gambar))
                                                @foreach($item->gambar as $gambar)
                                                    <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar" class="img-fluid">
                                                @endforeach
                                            @endif
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">

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
                                                    <h6>
                                                        <a href="{{ route('bytitle', $item->slug) }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </aside>

                        <!-- social media -->
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
                        <!-- End social media -->

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

                        {{-- <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </aside> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var currentUrl = window.location.href;
    
        document.getElementById('share-facebook').href = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
        document.getElementById('share-twitter').href = 'https://x.com/intent/tweet?url=' + encodeURIComponent(currentUrl);
        document.getElementById('share-whatsapp').href = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(currentUrl);
    </script>

@include('blog.partials.footer')
@endsection
    