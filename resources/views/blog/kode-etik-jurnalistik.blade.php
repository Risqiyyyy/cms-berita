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
                            <h4 class="card-title mb-0">Pendahuluan</h4>
                        </div>
                        <div class="card-body">
                            <p>Kemerdekaan berpendapat, berekspresi, dan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB. Kemerdekaan pers adalah sarana masyarakat untuk memperoleh informasi dan berkomunikasi, guna memenuhi kebutuhan hakiki dan meningkatkan kualitas kehidupan manusia. Dalam mewujudkan kemerdekaan pers itu, wartawan Indonesia juga menyadari adanya kepentingan bangsa, tanggung jawab sosial, keberagaman masyarakat, dan norma-norma agama.</p>
                            <p>Dalam melaksanakan fungsi, hak, kewajiban dan peranannya, pers menghormati hak asasi setiap orang, karena itu pers dituntut profesional dan terbuka untuk dikontrol oleh masyarakat.</p>
                            <p>Untuk menjamin kemerdekaan pers dan memenuhi hak publik untuk memperoleh informasi yang benar, wartawan Indonesia memerlukan landasan moral dan etika profesi sebagai pedoman operasional dalam menjaga kepercayaan publik dan menegakkan integritas serta profesionalisme. Atas dasar itu, wartawan Indonesia menetapkan dan menaati Kode Etik Jurnalistik:</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 1</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia bersikap independen, menghasilkan berita yang akurat, berimbang, dan tidak beritikad buruk.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Independen</strong> berarti memberitakan peristiwa atau fakta sesuai dengan suara hati nurani tanpa campur tangan, paksaan, dan intervensi dari pihak lain termasuk pemilik perusahaan pers.</li>
                                <li><strong>Akurat</strong> berarti dipercaya benar sesuai keadaan objektif ketika peristiwa terjadi.</li>
                                <li><strong>Berimbang</strong> berarti semua pihak mendapat kesempatan setara.</li>
                                <li><strong>Tidak beritikad buruk</strong> berarti tidak ada niat secara sengaja dan semata-mata untuk menimbulkan kerugian pihak lain.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 2</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia menempuh cara-cara yang profesional dalam melaksanakan tugas jurnalistik.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li>Menunjukkan identitas diri kepada narasumber;</li>
                                <li>Menghormati hak privasi;</li>
                                <li>Tidak menyuap;</li>
                                <li>Menghasilkan berita yang faktual dan jelas sumbernya;</li>
                                <li>Rekayasa pengambilan dan pemuatan atau penyiaran gambar, foto, suara dilengkapi dengan keterangan tentang sumber dan ditampilkan secara berimbang;</li>
                                <li>Menghormati pengalaman traumatik narasumber dalam penyajian gambar, foto, suara;</li>
                                <li>Tidak melakukan plagiat, termasuk menyatakan hasil liputan wartawan lain sebagai karya sendiri;</li>
                                <li>Penggunaan cara-cara tertentu dapat dipertimbangkan untuk peliputan berita investigasi bagi kepentingan publik.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pasal 3</h4>
                        </div>
                        <div class="card-body">
                            <p>Wartawan Indonesia selalu menguji informasi, memberitakan secara berimbang, tidak mencampurkan fakta dan opini yang menghakimi, serta menerapkan asas praduga tak bersalah.</p>
                            <h5>Penafsiran</h5>
                            <ul>
                                <li><strong>Menguji informasi</strong> berarti melakukan check and recheck tentang kebenaran informasi itu.</li>
                                <li><strong>Berimbang</strong> adalah memberikan ruang atau waktu pemberitaan kepada masing-masing pihak secara proporsional.</li>
                                <li><strong>Opini yang menghakimi</strong> adalah pendapat pribadi wartawan. Hal ini berbeda dengan opini interpretatif, yaitu pendapat yang berupa interpretasi wartawan atas fakta.</li>
                                <li><strong>Asas praduga tak bersalah</strong> adalah prinsip tidak menghakimi seseorang.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center m-3">
                        <a href="{{ route('about.etik_jurnalistik2') }}" class="btn btn-outline-primary mb-4 text-capitalize">Halaman 2</a>
                    </div>
                </article>
            </div>
            @include('blog.side')
        </div>
    </div>
</section>
@include('blog.partials.footer')
@endsection
