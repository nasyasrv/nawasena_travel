@extends('landing.layouts.app')
@section('content')
<!-- banner-bottom -->
<section class="some-content py-5" id="about">
    <div class="container py-md-5">
        <div class="row about-vv-top mt-2">
            <div class="col-lg-6 about-info1">
                <div class="row">
                    <h4 class="title-hny md-5 mx-3" style="color:#FF0000;"> <strong>NAWASENA</strong></h4>
                    <h5 class="title-hny md-5 mt-3 "> <strong>TRANSPORTATION SERVICE</strong></h5>
                </div>
                <p class="text-justify">
                    Kami adalah usaha jasa professional yang akan mempermudah mobilisasi anda dalam segala urusan.
                    Bisnis? Dinas? Kami Akan suguhkan pengalaman menarik mendapatkan perhatian khusus Dan pelayanan
                    maksimal dari driver kami. Pariwisata? Keluarga? Kami akan suguhkan dengan berbagai banyak
                    rekomendasi tempat wisata, kuliner dan oleh - oleh terbaik ditempatnya, dipandu dengan driver/guide
                    yang akan selalu ringan tangan dan ide Untuk anda. Untuk urusan armada, anda dapat percayakan
                    terhadap kami, karena kami menjamin semua armada dalam kondisi, sehat, bersih, wangi, Dan pastinya
                    nyaman-aman saat dibawa berkeliling.
                    Dengan pilihan armada yang banyak Dan driver mumpuni, mulai dari kelas standar, luxury dan royal,
                    maka memperluas pengalaman dinas Dan atau pariwisata anda.
                </p>
                <p class="mt-2"> <em>~Good trip, Good feel and enjoy your life~</em></p>
            </div>
            <div class="col-lg-6 about-img  mt-md-4 mt-sm-4">
                <img src="{{ asset('landing/images/nred.png') }}" class="img-fluid about-pic" alt="">
            </div>
        </div>
    </div>
</section>
<section class="testimonials1 py-5">
    <div class="container py-md-5">
        <h3 class="heading heading1 text-center mb-3 mb-sm-5">Kenapa Memilih Kami?</h3>
        <div class="row align-items-center mt-4">
            <div class="col-lg-6 mt-md-4 mt-sm-4">
                <img src="{{ asset('landing/images/owner1.jpg') }}" class="img-fluid rounded" alt="Layanan Kami" style="    width: 30rem;margin-top: -60px;">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="feature-cards">
                    <div class="card-1 mb-4 p-3 shadow-sm">
                        <div class="d-flex align-items-center mb-2">
                            <span class="icon text-success me-4">
                                <i class="fa fa-check-circle fa-2x"></i>
                            </span>
                            <h4>Mobil Terawat</h4>
                        </div>
                        <p class="text-justify">
                            Kami selalu menjaga performa serta kebersihan dari mobil yang kami tawarkan dengan melakukan
                            servis secara berkala.
                        </p>
                    </div>
                    <div class="card-1 mb-4 p-3 shadow-sm">
                        <div class="d-flex align-items-center mb-2">
                            <span class="icon text-success me-2">
                                <i class="fa fa-check-circle fa-2x"></i>
                            </span>
                            <h4>Driver Profesional</h4>
                        </div>
                        <p class="text-justify">
                            Driver kami memiliki pengalaman di bidangnya, sehingga dapat mengurangi risiko perjalanan
                            Anda.
                        </p>
                    </div>
                    <div class="card-1 mb-4 p-3 shadow-sm">
                        <div class="d-flex align-items-center mb-2">
                            <span class="icon text-success me-2">
                                <i class="fa fa-check-circle fa-2x"></i>
                            </span>
                            <h4>Harga Terjangkau</h4>
                        </div>
                        <p class="text-justify">
                            Harga untuk sewa mobil dan paket wisata yang kami tawarkan sangat bersaing dengan layanan
                            fasilitas yang kami berikan.
                        </p>
                    </div>
                    <div class="card-1 mb-4 p-3 shadow-sm">
                        <div class="d-flex align-items-center mb-2">
                            <span class="icon text-success me-2">
                                <i class="fa fa-check-circle fa-2x"></i>
                            </span>
                            <h4>Layanan 24 Jam</h4>
                        </div>
                        <p class="text-justify">
                            Kami siap melayani kebutuhan Anda kapan saja, 24 jam sehari, 7 hari seminggu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials py-5">
    <div class="container py-md-5">
        <h3 class="heading heading1 text-center mb-3 mb-sm-5">Fasilitas Kami</h3>
        <div class="row align-items-center mt-4">
            <!-- Top row with 4 cards -->
            <div class="col-md-3">
                <div class="card-2 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-car fa-2x mb-3"></i> <!-- Icon Mobil Sehat -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Mobil Sehat</h4>
                    </div>
                    <p>
                        Mobil sehat adalah kendaraan yang selalu terawat, bersih, dan siap memberikan kenyamanan serta keamanan di setiap perjalanan
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-2 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-broom fa-2x mb-3"></i> <!-- Icon Mobil Bersih -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Mobil Bersih</h4>
                    </div>
                    <p>
                        Mobil bersih adalah kendaraan yang selalu dijaga kebersihannya, memberikan kenyamanan dan pengalaman berkendara yang menyenangkan.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-2 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-smile-beam fa-2x mb-3"></i> <!-- Icon Mobil Wangi -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Mobil Wangi</h4>
                    </div>
                    <p>
                        Mobil wangi menghadirkan suasana segar dan nyaman, membuat perjalanan semakin menyenangkan.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-2 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-shield-alt fa-2x mb-3"></i> <!-- Icon Mobil Aman-Nyaman -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Mobil Aman-Nyaman</h4>
                    </div>
                    <p>
                        Mobil aman-nyaman memberikan perlindungan maksimal dan kenyamanan terbaik untuk perjalanan tanpa khawatir.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <!-- Bottom row with 3 cards -->
            <div class="col-md-4">
                <div class="card-3 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-handshake fa-2x mb-3"></i> <!-- Icon Driver Ramah -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Driver Ramah</h4>
                    </div>
                    <p>
                        Driver ramah selalu siap melayani dengan senyuman, menjadikan perjalanan lebih menyenangkan dan penuh kehangatan.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-3 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-user-tie fa-2x mb-3"></i> <!-- Icon Driver Pengalaman -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Driver Pengalaman</h4>
                    </div>
                    <p>
                        Driver berpengalaman menjamin perjalanan yang aman, efisien, dan bebas khawatir di segala kondisi.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-3 mb-4 p-3 shadow-sm text-center">
                    <i class="fa fa-briefcase fa-2x mb-3"></i> <!-- Icon Driver Profesional -->
                    <div class="d-flex align-items-center mb-2">
                        <h4>Driver Profesional</h4>
                    </div>
                    <p>
                        Driver profesional mengutamakan keselamatan, ketepatan waktu, dan pelayanan terbaik di setiap perjalanan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
