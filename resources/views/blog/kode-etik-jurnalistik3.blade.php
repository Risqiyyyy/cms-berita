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
                            <h4 class="card-title mb-0">Pasal 8</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia tidak menulis atau menyiarkan berita berdasarkan prasangka atau diskriminasi terhadap seseorang atas dasar perbedaan suku, ras, warna kulit, agama, jenis kelamin, dan bahasa serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa atau cacat jasmani.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Prasangka</strong> adalah anggapan yang kurang baik mengenai sesuatu sebelum mengetahui secara jelas.</li>
                                <li><strong>Diskriminasi</strong> adalah pembedaan perlakuan.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 9</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia menghormati hak narasumber tentang kehidupan pribadinya, kecuali untuk kepentingan publik.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Menghormati hak narasumber</strong> adalah sikap menahan diri dan berhati-hati.</li>
                                <li><strong>Kehidupan pribadi</strong> adalah segala segi kehidupan seseorang dan keluarganya selain yang terkait dengan kepentingan publik.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 10</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia segera mencabut, meralat, dan memperbaiki berita yang keliru dan tidak akurat disertai dengan permintaan maaf kepada pembaca, pendengar, dan atau pemirsa.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Segera</strong> berarti tindakan dalam waktu secepat mungkin, baik karena ada maupun tidak ada teguran dari pihak luar.</li>
                                <li><strong>Permintaan maaf</strong> disampaikan apabila kesalahan terkait dengan substansi pokok.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 11</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia melayani hak jawab dan hak koreksi secara proporsional.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Hak jawab</strong> adalah hak seseorang atau sekelompok orang untuk memberikan tanggapan atau sanggahan terhadap pemberitaan berupa fakta yang merugikan nama baiknya.</li>
                                <li><strong>Hak koreksi</strong> adalah hak setiap orang untuk membetulkan kekeliruan informasi yang diberitakan oleh pers, baik tentang dirinya maupun tentang orang lain.</li>
                                <li><strong>Proporsional</strong> berarti setara dengan bagian berita yang perlu diperbaiki.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Penilaian dan Sanksi</h4>
                        </div>
                        <div class="card-body">
                            <p>Penilaian akhir atas pelanggaran kode etik jurnalistik dilakukan Dewan Pers. Sanksi atas pelanggaran kode etik jurnalistik dilakukan oleh organisasi wartawan dan atau perusahaan pers.</p>
                            <p>Jakarta, Selasa, 14 Maret 2006</p>
                            <p>(Kode Etik Jurnalistik ditetapkan Dewan Pers melalui Peraturan Dewan Pers Nomor: 6/Peraturan-DP/V/2008 Tentang Pengesahan Surat Keputusan Dewan Pers Nomor 03/SK-DP/III/2006 tentang Kode Etik Jurnalistik Sebagai Peraturan Dewan Pers)</p>
                        </div>
                    </div>

                </article>
            </div>

            @include('blog.side')
        </div>
    </div>
</section>
@include('blog.partials.footer')
@endsection
