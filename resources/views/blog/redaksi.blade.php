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
                        Redaksi
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <aside class="wrapper__list__article">
                    <h2>Redaksi FTNews.co.id</h2>
                        <p><strong>Penerbit:</strong><br>
                        PT. FORUM TERKINI MEDIA<br>
                        Nomor AHU-0033926.AH.01.01.TAHUN 2021 Tanggal, 25 Mei 2021<br>
                        Terverifikasi secara Administratif dan Faktual oleh Dewan Pers<br>
                        No. 976/DP-Verifikasi/K/IV/2022</p>

                        <p><strong>Komisaris Utama</strong><br>
                        Alfonso FP</p>

                        <p><strong>Pemimpin Umum</strong><br>
                        Tanti Sagittarini</p>

                        <p><strong>Pemimpin Redaksi/Penanggung Jawab</strong><br>
                        Bambang Dwiwarno</p>

                        <p><strong>Dewan Redaksi</strong><br>
                        Alfonso FP<br>
                        Tanti Sagittarini<br>
                        Roso Daras</p>

                        <p><strong>Pj. Redaktur Pelaksana</strong><br>
                        Adam Erlangga</p>

                        <p><strong>Redaksi</strong></p>
                        <ul>
                            <li>Adinda Ratna Safira</li>
                            <li>Ario Vallentino Syahgatra</li>
                            <li>Nuralfian</li>
                            <li>Choirul Anwar</li>
                            <li>Jayadi</li>
                        </ul>

                        <p><strong>Kontributor</strong><br>
                        Monang Sitohang</p>

                        <p><strong>Multimedia</strong></p>
                        <ul>
                            <li>Dimas</li>
                            <li>A. Firhan</li>
                            <li>Nadya Nuraulia</li>
                            <li>Siti Fakhriyatussyah Aribah</li>
                        </ul>

                        <p><strong>Media Pemilu</strong><br>
                        Diana Ontje Irene Runtu</p>

                        <p><strong>Sekretaris Redaksi</strong><br>
                        Trisnawaty</p>

                        <p><strong>Penasihat Hukum</strong></p>
                        <ul>
                            <li>Heriady Sidauruk, SH</li>
                            <li>Gandhi Alfredo Sinaga, SH</li>
                        </ul>

                        <p><strong>IT Support/Web Admin</strong><br>
                        Agus Ramadhan</p>

                        <p><strong>Bagian Umum</strong><br>
                        Heri Siswanto</p>

                        <p><strong>Alamat Redaksi:</strong><br>
                        Royal Spring Residence<br>
                        Jl. Raya Ragunan No.T.05, RT.8/RW.6,<br>
                        Jati Padang, Ps. Minggu, Jakarta Selatan,<br>
                        DKI Jakarta 12540<br>
                        Telepon: +62812-822-81-822</p>

                        <p><strong>Email:</strong><br>
                        redaksi@ftnews.co.id<br>
                        ptforumterkinimedia@gmail.com</p>

                        <p><strong>FB:</strong> FTNewscoid<br>
                        <strong>IG:</strong> @ftnews.co.id</p>

                        <p><strong>Rekening Bank:</strong><br>
                        BCA KCP Hassanudin, Kebayoran Baru<br>
                        No. Rekening: 5230256391 a/n PT. Forum Terkini Media</p>
                </aside>
            </div>
            @include('blog.side')
        </div>

    </div>

</section>

@include('blog.partials.footer')
@endsection
