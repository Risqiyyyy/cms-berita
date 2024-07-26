@extends('blog.partials.app')

{{-- @section('title', 'Akun') --}}

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Breadcrumb -->
                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="{{ url('/') }}" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        {{ $category->nama_kategori }}
                    </li>
                    @if($subCategory)
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        {{ $subCategory->nama_sub_kategori }}
                    </li>
                    @endif
                </ul>                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <aside class="wrapper__list__article ">
                    <h4 class="border_section">
                        @if($subCategory)
                            {{ $subCategory->nama_sub_kategori }}
                        @else
                            {{ $category->nama_kategori }}
                        @endif
                    </h4>
                    @foreach ($post as $item)
                      <!-- Post Article List -->
                      <div class="card__post card__post-list card__post__transition mt-30">
                        <div class="row ">
                            <div class="col-md-5">
                                <div class="card__post__transition">
                                    <a href="{{ route('bytitle', $item->slug) }}">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 my-auto pl-0">
                                <div class="card__post__body ">
                                    <div class="card__post__content  ">
                                        <div class="card__post__category">
                                            {{ $item->kategori->nama_kategori }}
                                        </div>
                                        @if ($item->subcategory)
                                        <div class="card__post__category">
                                            {{ $item->subcategory->nama_sub_kategori }}
                                        </div>
                                        @endif                                    
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
                                            if (count($words) > 10) {
                                            $truncated = implode(' ', array_slice($words, 0, 50)) . '...';
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
                  
                </aside>
            </div>
            @include('blog.side')
        </div>

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

    </div>
</section>

@include('blog.partials.footer')
@endsection
