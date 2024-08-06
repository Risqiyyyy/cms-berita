@extends('blog.partials.app')

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
                    <h1 class="mb-4">Redaksi FTNews.co.id</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Penerbit</h4>
                        </div>
                        <div class="card-body">
                            <p>PT. FORUM TERKINI MEDIA</p>
                            <p>Nomor AHU-0033926.AH.01.01.TAHUN 2021 Tanggal, 25 Mei 2021</p>
                            <p>Terverifikasi secara Administratif dan Faktual oleh Dewan Pers</p>
                            <p>No. 976/DP-Verifikasi/K/IV/2022</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Komisaris Utama</h4>
                        </div>
                        <div class="card-body">
                            <p>Alfonso FP</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pemimpin Umum</h4>
                        </div>
                        <div class="card-body">
                            <p>Tanti Sagittarini</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pemimpin Redaksi/Penanggung Jawab</h4>
                        </div>
                        <div class="card-body">
                            <p>Bambang Dwiwarno</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Dewan Redaksi</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Alfonso FP</li>
                                <li>Tanti Sagittarini</li>
                                <li>Roso Daras</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pj. Redaktur Pelaksana</h4>
                        </div>
                        <div class="card-body">
                            <p>Adam Erlangga</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Redaksi</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Adinda Ratna Safira</li>
                                <li>Ario Vallentino Syahgatra</li>
                                <li>Nuralfian</li>
                                <li>Choirul Anwar</li>
                                <li>Jayadi</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Kontributor</h4>
                        </div>
                        <div class="card-body">
                            <p>Monang Sitohang</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Multimedia</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Dimas</li>
                                <li>A. Firhan</li>
                                <li>Nadya Nuraulia</li>
                                <li>Siti Fakhriyatussyah Aribah</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Media Pemilu</h4>
                        </div>
                        <div class="card-body">
                            <p>Diana Ontje Irene Runtu</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Sekretaris Redaksi</h4>
                        </div>
                        <div class="card-body">
                            <p>Trisnawaty</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Penasihat Hukum</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>Heriady Sidauruk, SH</li>
                                <li>Gandhi Alfredo Sinaga, SH</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">IT Support/Web Admin</h4>
                        </div>
                        <div class="card-body">
                            <p>Agus Ramadhan</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Bagian Umum</h4>
                        </div>
                        <div class="card-body">
                            <p>Heri Siswanto</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Alamat Redaksi</h4>
                        </div>
                        <div class="card-body">
                            <p>Royal Spring Residence</p>
                            <p>Jl. Raya Ragunan No.T.05, RT.8/RW.6,</p>
                            <p>Jati Padang, Ps. Minggu, Jakarta Selatan,</p>
                            <p>DKI Jakarta 12540</p>
                            <p>Telepon: +62812-822-81-822</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Email</h4>
                        </div>
                        <div class="card-body">
                            <p>redaksi@ftnews.co.id</p>
                            <p>ptforumterkinimedia@gmail.com</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Social Media</h4>
                        </div>
                        <div class="card-body">
                            <p>FB: FTNewscoid</p>
                            <p>IG: @ftnews.co.id</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Rekening Bank</h4>
                        </div>
                        <div class="card-body">
                            <p>BCA KCP Hassanudin, Kebayoran Baru</p>
                            <p>No. Rekening: 5230256391 a/n PT. Forum Terkini Media</p>
                        </div>
                    </div>
                </aside>
            </div>
            @include('blog.side')
        </div>
    </div>
</section>

@include('blog.partials.footer')
@endsection
