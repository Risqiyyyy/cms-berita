    <!-- loading -->
    <div class="loading-container">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <ul class="list-unstyled">
                <li>
                    <img src="{{ asset('/images/icon-ftnews.png')}}" alt="Alternate Text" height="100" />

                </li>
                <li>

                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>

                    </div>

                </li>
                <li>
                    <p>Loading</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- End loading -->

    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text" id="user-time">
                                Loading date and time...
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            @foreach ($media as $item)
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="{{ $item->facebook }}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $item->twitter }}"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $item->tiktok }}"><i class="fa fa-tiktok"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $item->youtube }}"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Top  -->
        <!-- Navbar  -->
        <!-- Navbar menu  -->
        <div class="navigation-wrap navigation-shadow bg-white">
            <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
                <div class="container">
                    <div class="offcanvas-header">
                        <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                            <span class="navbar-toggler-icon"></span>
                        </div>
                    </div>
                    <figure class="mb-0 mx-auto">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('/images/Logo-FTNews-New-dark3.png')}}" alt="" class="img-fluid logo">
                        </a>
                    </figure>

                    <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"> Home </a></li>
                            <ul class="navbar-nav">
                                @foreach ($categories as $item)
                                <li class="nav-item dropdown">
                                    <a class="nav-link main-link" href="{{ route('bycategory', $item->slug) }}">
                                        {{$item->nama_kategori}}
                                    </a>
                                    @if($item->subCateg->isNotEmpty())
                                    <a class="nav-link dropdown-toggle sub-link" href="#" data-toggle="dropdown"> </a>
                                    <ul class="dropdown-menu animate fade-up mx-auto">
                                        @foreach ($item->subCateg as $subItem)
                                        <li><a class="dropdown-item" href="{{ route('bycategory', [$item->slug, $subItem->slug]) }}"> {{ $subItem->nama_sub_kategori }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> News </a>
                                <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                    <div class="container wrap__mobile-megamenu">
                                        <div class="col-megamenu">
                                            <h5 class="title">Berita Baru</h5>
                                            <hr>
                                            <!-- Popular news carousel -->
                                            <div class="popular__news-header-carousel">
                                                <div class="top__news__slider">
                                                    @foreach ($news as $item)
                                                    <div class="item">
                                                        <!-- Post Article -->
                                                        <div class="article__entry">
                                                            <div class="article__image">
                                                                <a href="{{ route('bytitle', $item->slug) }}">
                                                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                                                        alt="" class="img-fluid">
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
                                        </div> <!-- col-megamenu.// -->
                                    </div>
                                </div> <!-- dropdown-mega-menu.// -->
                            </li>
                        </ul>


                        <!-- Search bar.// -->
                        <ul class="navbar-nav ">
                            <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Search content bar.// -->
                        <div class="top-search navigation-shadow">
                            <div class="container">
                                <div class="input-group ">
                                    <form action="#">

                                        <div class="row no-gutters mt-3">
                                            <div class="col">
                                                <input class="form-control border-secondary border-right-0 rounded-0"
                                                    type="search" value="" placeholder="Search "
                                                    id="example-search-input4">
                                            </div>
                                            <div class="col-auto">
                                                <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                    href="/search-result.html">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Search content bar.// -->
                    </div> <!-- navbar-collapse.// -->
                </div>
            </nav>
        </div>
        <!-- End Navbar menu  -->

        <!-- Navbar sidebar menu  -->
        <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-aside" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="widget__form-search-bar  ">
                            <div class="row no-gutters">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                        placeholder="Search">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <nav class="list-group list-group-flush">
                            <ul class="navbar-nav ">
                                <li class="nav-item"><a class="nav-link  text-dark" href="#"> Home </a></li>
                                @foreach ($categories as $item)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  text-dark" href="#" data-toggle="dropdown">
                                        {{ $item->nama_kategori}} </a>
                                    <ul class="dropdown-menu animate fade-up">
                                        @foreach ($item->subCategories as $subItem)
                                        <li><a class="dropdown-item" href="#"> {{ $subItem->nama_sub_kategori }} </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

                        </nav>
                    </div>
                </div>
            </div> <!-- modal-bialog .// -->
        </div> <!-- modal.// -->
        <!-- End Navbar sidebar menu  -->
        <!-- End Navbar  -->
    </header>
    <!-- End Header news -->