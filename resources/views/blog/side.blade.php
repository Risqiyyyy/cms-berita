<div class="col-md-4">
    <div class="sidebar-sticky">
        <aside class="wrapper__list__article ">
            <h4 class="border_section">Populer</h4>
            <div class="wrapper__list__article-small">
                @foreach ($populer as $item)
                <div class="mb-3">
                    <!-- Post Article -->
                    <div class="card__post card__post-list">
                        <div class="image-sm">
                            <a href="{{ route('bytitle', $item->slug) }}">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt="">
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
                {{-- <!-- Post Article -->
                <div class="article__entry">
                    <div class="article__image">
                        <a href="#">
                            <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="article__content">
                        <div class="article__category">
                            travel
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-primary">
                                    by david hall
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize">
                                    descember 09, 2016
                                </span>
                            </li>

                        </ul>
                        <h5>
                            <a href="#">
                                Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                            </a>
                        </h5>
                        <p>
                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu
                            iaculis placerat sollicitudin ut
                            est. In fringilla dui dui.
                        </p>
                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                    </div>
                </div> --}}
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

        <aside class="wrapper__list__article">
            <h4 class="border_section">newsletter</h4>
            <!-- Form Subscribe -->
            <div class="widget__form-subscribe bg__card-shadow">
                <h6>
                    The most important world news and events of the day.
                </h6>
                <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Your email address">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">sign up</button>
                    </div>
                </div>
            </div>
        </aside>

        {{-- <aside class="wrapper__list__article">
            <h4 class="border_section">Advertise</h4>
            <a href="#">
                <figure>
                    <img src="/images/placeholder/500x400.jpg" alt="" class="img-fluid">
                </figure>
            </a>
        </aside> --}}

    </div>
</div>