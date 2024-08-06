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
                        Kode Etik Jurnalistik
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="wrapper__list__article">
                    <h1 class="mb-4">Kode Etik Jurnalistik</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 4</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia tidak membuat berita bohong, fitnah, sadis, dan cabul.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Bohong</strong> berarti sesuatu yang sudah diketahui sebelumnya oleh wartawan sebagai hal yang tidak sesuai dengan fakta yang terjadi.</li>
                                <li><strong>Fitnah</strong> berarti tuduhan tanpa dasar yang dilakukan secara sengaja dengan niat buruk.</li>
                                <li><strong>Sadis</strong> berarti kejam dan tidak mengenal belas kasihan.</li>
                                <li><strong>Cabul</strong> berarti penggambaran tingkah laku secara erotis dengan foto, gambar, suara, grafis atau tulisan yang semata-mata untuk membangkitkan nafsu birahi.</li>
                                <li>Dalam penyiaran gambar dan suara dari arsip, wartawan mencantumkan waktu pengambilan gambar dan suara.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 5</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia tidak menyebutkan dan menyiarkan identitas korban kejahatan susila dan tidak menyebutkan identitas anak yang menjadi pelaku kejahatan.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Identitas</strong> adalah semua data dan informasi yang menyangkut diri seseorang yang memudahkan orang lain untuk melacak.</li>
                                <li><strong>Anak</strong> adalah seorang yang berusia kurang dari 16 tahun dan belum menikah.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 6</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia tidak menyalahgunakan profesi dan tidak menerima suap.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Menyalahgunakan profesi</strong> adalah segala tindakan yang mengambil keuntungan pribadi atas informasi yang diperoleh saat bertugas sebelum informasi tersebut menjadi pengetahuan umum.</li>
                                <li><strong>Suap</strong> adalah segala pemberian dalam bentuk uang, benda atau fasilitas dari pihak lain yang mempengaruhi independensi.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 7</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia memiliki hak tolak untuk melindungi narasumber yang tidak bersedia diketahui identitas maupun keberadaannya, menghargai ketentuan embargo, informasi latar belakang, dan off the record sesuai dengan kesepakatan.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Hak tolak</strong> adalah hak untuk tidak mengungkapkan identitas dan keberadaan narasumber demi keamanan narasumber dan keluarganya.</li>
                                <li><strong>Embargo</strong> adalah penundaan pemuatan atau penyiaran berita sesuai dengan permintaan narasumber.</li>
                                <li><strong>Informasi latar belakang</strong> adalah segala informasi atau data dari narasumber yang disiarkan atau diberitakan tanpa menyebutkan narasumbernya.</li>
                                <li><strong>Off the record</strong> adalah segala informasi atau data dari narasumber yang tidak boleh disiarkan atau diberitakan.</li>
                            </ul>
                        </div>
                    </div>
                </article>

                <div class="text-center m-3">
                    <a href="{{ route('about.etik_jurnalistik3') }}" class="btn btn-outline-primary mb-4 text-capitalize">Halaman 3</a>
                </div>
            </div>

            @include('blog.side')
        </div>
    </div>
</section>
@include('blog.partials.footer')
@endsection
