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
                        Pedoman Pemberitaan Media Siber
                    </li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <aside class="wrapper__list__article">
                    <h1 class="mb-4">Pedoman Pemberitaan Media Siber</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">1. Ruang Lingkup</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Media Siber adalah segala bentuk media yang menggunakan wahana internet dan melaksanakan kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar Perusahaan Pers yang ditetapkan Dewan.</p>
                            <p><strong>b)</strong> Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau dipublikasikan oleh pengguna media siber, antara lain, artikel, gambar, komentar, suara, video dan berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum, komentar pembaca atau pemirsa.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">2. Verifikasi dan Keberimbangan Berita</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Pada prinsipnya setiap berita harus melalui verifikasi.</p>
                            <p><strong>b)</strong> Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama untuk memenuhi prinsip akurasi dan keberimbangan.</p>
                            <p><strong>c)</strong> Ketentuan dalam butir (a) di atas dikecualikan, dengan syarat:</p>
                            <ul>
                                <li>Berita benar-benar mengandung kepentingan publik yang bersifat mendesak;</li>
                                <li>Sumber berita yang pertama adalah sumber yang jelas disebutkan identitasnya, kredibel dan kompeten;</li>
                                <li>Subyek berita yang harus dikonfirmasi tidak diketahui keberadaannya dan atau tidak dapat diwawancarai;</li>
                                <li>Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih memerlukan verifikasi lebih lanjut yang diupayakan dalam waktu. Penjelasan dimuat pada bagian akhir dari berita yang sama, di dalam kurung dan menggunakan huruf miring.</li>
                            </ul>
                            <p><strong>d)</strong> Setelah memuat berita sesuai dengan butir (c), media wajib meneruskan upaya verifikasi, dan setelah verifikasi didapatkan, hasil verifikasi dicantumkan pada berita pemutakhiran (update) dengan tautan pada berita yang belum terverifikasi.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">3. Isi Buatan Pengguna (User Generated Content)</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang tidak bertentangan dengan Undang-Undang No. 40 tahun 1999 tentang Pers dan Kode Etik Jurnalistik, yang ditempatkan secara terang dan jelas.</p>
                            <p><strong>b)</strong> Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan melakukan proses log-in terlebih dahulu untuk dapat mempublikasikan semua bentuk Isi Buatan Pengguna. Ketentuan mengenai log-in akan diatur lebih lanjut.</p>
                            <p><strong>c)</strong> Dalam registrasi tersebut, media siber mewajibkan pengguna memberi persetujuan tertulis bahwa Isi Buatan Pengguna yang dipublikasikan:</p>
                            <ul>
                                <li>Tidak memuat isi bohong, fitnah, sadis dan cabul;</li>
                                <li>Tidak memuat isi yang mengandung prasangka dan kebencian terkait dengan suku, agama, ras, dan antargolongan (SARA), serta menganjurkan tindakan kekerasan;</li>
                                <li>Tidak memuat isi diskriminatif atas dasar perbedaan jenis kelamin dan bahasa, serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa, atau cacat fisik.</li>
                            </ul>
                            <p><strong>d)</strong> Media siber memiliki kewenangan mutlak untuk mengedit atau menghapus Isi Buatan Pengguna yang bertentangan dengan butir (c).</p>
                            <p><strong>e)</strong> Media siber wajib menyediakan mekanisme pengaduan Isi Buatan Pengguna yang dinilai melanggar ketentuan pada butir (c). Mekanisme tersebut harus disediakan di tempat yang dengan mudah dapat diakses.</p>
                            <p><strong>f)</strong> Media siber wajib menyunting, menghapus, dan melakukan tindakan koreksi setiap Isi Buatan Pengguna yang dilaporkan dan melanggar ketentuan butir (c), sesegera mungkin secara proporsional selambat-lambatnya 2 x 24 jam setelah pengaduan.</p>
                            <p><strong>g)</strong> Media siber yang telah memenuhi ketentuan pada butir (a), (b), (c), dan (f) tidak dibebani tanggung jawab atas masalah yang ditimbulkan akibat pemuatan isi yang melanggar ketentuan pada butir (c).</p>
                            <p><strong>h)</strong> Media siber bertanggung jawab atas Isi Buatan Pengguna yang dilaporkan bila tidak mengambil tindakan koreksi setelah batas waktu sebagaimana tersebut pada butir (f).</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">4. Ralat, Koreksi, dan Hak Jawab</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Ralat, koreksi, dan hak jawab mengacu pada Undang-Undang Pers, Kode Etik Jurnalistik, dan Pedoman Hak Jawab yang ditetapkan Dewan Pers.</p>
                            <p><strong>b)</strong> Ralat, koreksi dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi atau yang diberi hak jawab.</p>
                            <p><strong>c)</strong> Di setiap berita ralat, koreksi, dan hak jawab wajib dicantumkan waktu pemuatan ralat, koreksi, dan atau hak jawab.</p>
                            <p><strong>d)</strong> Bila suatu berita media siber tertentu disebarluaskan media siber lain, maka:</p>
                            <ul>
                                <li>Tanggung jawab media siber pembuat berita terbatas pada berita yang dipublikasikan di media siber tersebut atau media siber yang berada di bawah otoritas teknisnya;</li>
                                <li>Koreksi berita yang dilakukan oleh sebuah media siber, juga harus dilakukan oleh media siber lain yang mengutip berita dari media siber yang dikoreksi itu;</li>
                                <li>Media yang menyebarluaskan berita dari sebuah media siber dan tidak melakukan koreksi atas berita sesuai yang dilakukan oleh media siber pemilik dan atau pembuat berita tersebut, bertanggung jawab penuh atas semua akibat hukum dari berita yang tidak dikoreksinya itu.</li>
                            </ul>
                            <p><strong>e)</strong> Sesuai dengan Undang-Undang Pers, media siber yang tidak melayani hak jawab dapat dijatuhi sanksi hukum pidana denda paling banyak Rp500.000.000 (Lima ratus juta rupiah).</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">5. Pencabutan Berita</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari pihak luar redaksi, kecuali terkait masalah SARA, kesusilaan, masa depan anak, pengalaman traumatik korban atau berdasarkan pertimbangan khusus lain yang ditetapkan Dewan Pers.</p>
                            <p><strong>b)</strong> Media siber lain wajib mengikuti pencabutan kutipan berita dari media asal yang telah dicabut.</p>
                            <p><strong>c)</strong> Pencabutan berita wajib disertai dengan alasan pencabutan dan diumumkan kepada publik.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">6. Iklan</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>a)</strong> Media siber wajib membedakan dengan tegas antara produk berita dan iklan.</p>
                            <p><strong>b)</strong> Setiap berita/artikel/isi yang merupakan iklan dan atau isi berbayar wajib mencantumkan keterangan "advertorial", "iklan", "ads", "sponsored", atau kata lain yang menjelaskan bahwa berita/artikel/isi tersebut adalah iklan.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">7. Hak Cipta</h4>
                        </div>
                        <div class="card-body">
                            <p>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">8. Pencantuman Pedoman</h4>
                        </div>
                        <div class="card-body">
                            <p>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang dan jelas.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="card-title mb-0">9. Sengketa</h4>
                        </div>
                        <div class="card-body">
                            <p>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini diselesaikan oleh Dewan Pers.</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <p>Jakarta, 3 Februari 2012</p>
                        <p>Disepakati oleh:</p>
                        <p><strong>ORGANISASI WARTAWAN DAN ORGANISASI PERUSAHAAN PERS</strong></p>
                        <p>Aliansi Jurnalis Independen (AJI)</p>
                        <p>Persatuan Wartawan Indonesia (PWI)</p>
                        <p>Ikatan Jurnalis Televisi Indonesia (IJTI)</p>
                        <p>Asosiasi Televisi Lokal Indonesia (ATVLI)</p>
                        <p>Asosiasi Televisi Swasta Indonesia (ATVSI)</p>
                        <p>Serikat Perusahaan Pers (SPS)</p>
                        <p>Persatuan Radio Siaran Swasta Nasional Indonesia (PRSSNI)</p>
                        <p>Mengetahui</p>
                        <p>ttd</p>
                        <p><strong>Bagir Manan</strong></p>
                        <p>Ketua Dewan Pers</p>
                    </div>
                </aside>
            </div>

            @include('blog.side')
        </div>
    </div>
</section>
@include('blog.partials.footer')
@endsection
