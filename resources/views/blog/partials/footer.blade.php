<section class="wrapper__section p-0">
    <div class="wrapper__section__components">
        <!-- Footer -->
        <footer>
            <div class="wrapper__footer bg__footer-dark pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget__footer">
                                {{-- <div class="dropdown-footer ">
                                    <h4 class="footer-title">
                                        world
                                        <span class="fa fa-angle-down"></span>
                                    </h4>

                                </div> --}}

                                <ul class="list-unstyled option-content is-hidden">
                                    <h3 class="text-white">Tentang Kami</h3>
                                    <p class="text-white mb-3">Merupakan media siber yang mengedepankan akurasi.
                                        Penyajian berita dengan mengutamakan kecepatan bukan prioritas utama kami.
                                        Menjadikan berita sebagai inspirasi sudah pasti. Itulah ciri kami.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <ul class="list-unstyled option-content is-hidden">
                                    <li>
                                        <a href="#">Redaksi</a>

                                    </li>
                                    <li>
                                        <a href="#">Pedoman Media Siber</a>
                                    </li>
                                    <li>
                                        <a href="#">Standar Perlindungan Profesi Wartawan</a>
                                    </li>
                                    <li>
                                        <a href="#">Kode Etik Jurnalistik</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <div class="dropdown-footer">
                                    <h3 class="footer-title">
                                        Tautan
                                        <span class="fa fa-angle-down"></span>
                                    </h3>
                                </div>
                                <ul class="list-unstyled option-content">
                                    @foreach ($categories as $item)
                                    <li class="dropdown-footer">
                                        @if ($item->subCategories->isEmpty())
                                            <a href="{{ route('bycategory', [$item->slug]) }}">
                                                <h6 class="footer-title">
                                                    {{ $item->nama_kategori }}
                                                </h6>
                                            </a>
                                        @else
                                            <h6 class="footer-title">
                                                {{ $item->nama_kategori }}
                                                <span class="fa fa-angle-down"></span>
                                            </h6>
                                
                                            <ul class="list-unstyled option-content is-hidden">
                                                @foreach ($item->subCategories as $subItem)
                                                <li>
                                                    <a href="{{ route('bycategory', [$item->slug, $subItem->slug]) }}">
                                                        > {{ $subItem->nama_sub_kategori }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget__footer">
                                <div class="dropdown-footer">
                                    <h4 class="footer-title">
                                        Baca Juga
                                        <span class="fa fa-angle-down"></span>
                                    </h4>

                                </div>
                                <ul class="list-unstyled option-content is-hidden">
                                    @foreach ($baca as $item)
                                    <li>
                                        <a href="{{ route('bytitle', $item->slug) }}">{{ $item->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <figure class="image-logo">
                                    <img src="{{ asset('/images/Logo-FTNews-New-dark3.png')}}" alt=""
                                        class="logo-footer">
                                </figure>
                            </div>
                            <div class="col-md-8 my-auto ">
                                <div class="social__media">
                                    @foreach ($media as $item)
                                    <ul class="list-inline">

                                        <li class="list-inline-item">
                                            <a href="{{ $item->facebook }}"
                                                class="btn btn-social rounded text-white facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ $item->instagram }}"
                                                class="btn btn-social rounded text-white instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ $item->twitter }}"
                                                class="btn btn-social rounded text-white x-twitter">
                                                <i class="fa-brands fa-square-x-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ $item->tiktok }}"
                                                class="btn btn-social rounded text-white tiktok">
                                                <i class="fa fa-tiktok"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ $item->youtube }}"
                                                class="btn btn-social rounded text-white youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer bottom -->
            <div class="wrapper__footer-bottom bg__footer-dark">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border-top-1 bg__footer-bottom-section">
                                <ul class="list-inline link-column">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span>
                                                PT Forum Terkini Media, 2024 © All Rights Reserved
                                            </span>
                                        </li>
                                    </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>
</section>
