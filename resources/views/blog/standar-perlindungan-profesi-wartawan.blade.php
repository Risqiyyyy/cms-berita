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
                        Perlindungan Profesi Wartawan
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <aside class="wrapper__list__article">
                    <h1 class="mb-4">Perlindungan Profesi Wartawan PT Forum Terkini Media</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pendahuluan</h4>
                        </div>
                        <div class="card-body">
                            <p>Kemerdekaan menyatakan pikiran dan pendapat merupakan hak asasi manusia yang tidak dapat dihilangkan dan harus dihormati. Rakyat Indonesia telah memilih dan berketetapan hati melindungi kemerdekaan menyatakan pikiran dan pendapat itu dalam Undang-Undang Dasar 1945. Kemerdekaan pers adalah salah satu wujud kedaulatan rakyat dan bagian penting dari kemerdekaan menyatakan pikiran dan pendapat.</p>
                            <p>Wartawan FTNews.co.id adalah pilar utama kemerdekaan pers. Oleh karena itu dalam menjalankan tugas profesinya wartawan mutlak mendapat perlindungan hukum dari negara, masyarakat, dan perusahaan pers. Untuk itu Standar Perlindungan Profesi Wartawan ini dibuat:</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Standar Perlindungan</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Perlindungan yang diatur dalam standar ini adalah perlindungan hukum untuk wartawan FTNews.co.id yang menaati kode etik jurnalistik dalam melaksanakan tugas jurnalistiknya memenuhi hak masyarakat memperoleh informasi;</li>
                                <li>Dalam melaksanakan tugas jurnalistik, wartawan FTNews.co.id memperoleh perlindungan hukum dari negara, masyarakat, dan perusahaan pers. Tugas jurnalistik meliputi mencari, memperoleh, memiliki, menyimpan, mengolah, dan menyampaikan informasi melalui media massa;</li>
                                <li>Dalam menjalankan tugas jurnalistik, wartawan FTNews.co.id dilindungi dari tindak kekerasan, pengambilan, penyitaan dan atau perampasan alat-alat kerja, serta tidak boleh dihambat atau diintimidasi oleh pihak manapun;</li>
                                <li>Karya jurnalistik wartawan FTNews.co.id dilindungi dari segala bentuk penyensoran;</li>
                                <li>Wartawan FTNews.co.id yang ditugaskan khusus di wilayah berbahaya dan atau konflik wajib dilengkapi surat penugasan, peralatan keselamatan yang memenuhi syarat, asuransi, serta pengetahuan, keterampilan dari perusahaan pers yang berkaitan dengan kepentingan penugasannya;</li>
                                <li>Dalam penugasan jurnalistik di wilayah konflik bersenjata, wartawan FTNews.co.id yang telah menunjukkan identitas sebagai wartawan dan tidak menggunakan identitas pihak yang bertikai, wajib diperlakukan sebagai pihak yang netral dan diberikan perlindungan hukum sehingga dilarang diintimidasi, disandera, disiksa, dianiaya, apalagi dibunuh;</li>
                                <li>Dalam perkara yang menyangkut karya jurnalistik, perusahaan pers diwakili oleh penanggungjawabnya;</li>
                                <li>Dalam kesaksian perkara yang menyangkut karya jurnalistik, penanggungjawabnya hanya dapat ditanya mengenai berita yang telah dipublikasikan. Wartawan dapat menggunakan hak tolak untuk melindungi sumber informasi;</li>
                                <li>Pemilik atau manajemen perusahaan pers dilarang memaksa wartawan FTNews.co.id untuk membuat berita yang melanggar Kode Etik Jurnalistik dan atau hukum yang berlaku.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center">
                        <p>Jakarta, 25 April 2008</p>
                        <p>Standar ini disetujui dan ditandatangani oleh sejumlah organisasi pers, pimpinan perusahaan pers, tokoh pers, lembaga terkait, serta Dewan Pers di Jakarta, 25 April 2008.</p>
                    </div>
                </aside>
            </div>
            @include('blog.side')
        </div>
    </div>
</section>
@include('blog.partials.footer')
@endsection
