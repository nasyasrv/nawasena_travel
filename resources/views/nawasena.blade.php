@extends('landing.app')
@section('content')
    <style>
        .card {
            background-color: #ffffff;
            /* Warna putih */
            border-radius: 12px;
            /* Membuat sudut membulat */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
            width: 269px;
            /* Lebar kotak */
            overflow: hidden;
            /* Memastikan gambar tidak keluar dari kotak */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0.5rem;
        }

        .card:hover {
            transform: translateY(-10px);
            /* Mengangkat kotak saat hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            /* Bayangan lebih tebal */
        }

        /* Gambar */
        .card-image {
            width: 100%;
            /* Lebar penuh */
            height: auto;
            /* Menjaga proporsi gambar */
        }

        /* Deskripsi */
        .card-description {
            padding: 20px;
            /* Ruang dalam kotak */
        }

        .card-description h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .card-description p {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            /* Geser tombol ke kanan */
            padding: 10px;
        }

        .rent {
            background-color: #FF0000;
            /* Warna oranye */
            color: #ffffff;
            /* Teks putih */
            border: none;
            padding: 12px 30px;
            /* Ruang dalam tombol */
            font-size: 12px;
            /* Ukuran font */
            font-weight: bold;
            border-radius: 4px;
            /* Sudut membulat */
            cursor: pointer;
            /* Kursor tangan */
            transition: all 0.3s ease-in-out;
            /* Animasi transisi */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
            text-transform: uppercase;
            /* Huruf besar semua */
        }


        .custom-border {
            border: 2px solid #FF0000;
            border-radius: 10px;
            padding: 15px;
            background-color: #ffffff;
        }

        .feature-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        .card-1 {
            background: #f1f1f1;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-1 h4 {
            margin: 0;
            margin-left: 10px;
        }
        .card-1 p {
            margin-left: 37px;
            font-size: 14px;
            color: #8f8f8f;
        }
    </style>
    <!-- banner -->
    <div class="banner" id="home">
        <div class="layer">
            <div class="container">
                <div class=" banner-text-w3ls">
                    <div class="w3ls_banner_txt">
                        <h3 class="b-w3ltxt text-capitalize mt-md-4">Pilihan Sewa Mobil Terbaik</h3>
                            <p>Kami memberikan pilihan Sewa mobil terbaik mulai dari standard class, premium class, Dan sampai royal class. Dengan harga bersaing, baik untuk acara dinas, wisata, maupun keluarga, dan semua kebutuhan anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->
    <section class="some-content py-5" id="about">
        <div class="container py-md-5">
            <div class="row about-vv-top mt-2">
                <div class="col-lg-6 about-info">
                    <h4 class="title-hny  md-5">Tentang NAWASENA</h4>
                    <p>
                        Kami adalah usaha jasa professional yang akan mempermudah mobilisasi anda dalam segala urusan. Bisnis? Dinas? Anda akan kau suguhkan pengalaman menarik mendapatkan perhatian khusus Dan pelayanan maksimal dari driver kami. Pariwisata? Keluarga? Kami akan suguhkan dengan berbagai banyak rekomendasi tempat wisata, kuliner dan oleh - oleh terbaik ditempatnya, dipandu dengan driver/guide yang akan selalu ringa tangan dan ide Untuk anda. Untuk urusan armada, anda dapat percayakan terhadap kami, karena kami menjamin semua armada dalam kondisi, sehat, bersih, wangi, Dan pastinya nyaman-aman saat dibawa berkeliling.
                        Dengan pilihan armada yang banyak Dan driver mumpuni, mulai dari kelas standar, luxury dan royal, maka memperluas pengalaman dinas Dan atau pariwisata anda.</p>
                    <div class="read-more-button mt-4">
                        <a href="/about_us" class="read-more btn">Baca Lebih Banyak</a>
                    </div>

                </div>
                <div class="col-lg-6 about-img mt-md-4 mt-sm-4">
                    <img src="{{ asset('landing/images/nred.png') }}" class="img-fluid" alt=""
                        style="width: 23rem; margin-left: 11rem;margin-top: 7rem;">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5">Kenapa Memilih Kami?</h3>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6 mt-md-4 mt-sm-4">
                    <img src="{{ asset('landing/images/layanan1.jpg') }}" class="img-fluid rounded" alt="Layanan Kami">
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
                            <p>
                                Kami selalu menjaga performa serta kebersihan dari mobil yang kami tawarkan dengan melakukan servis secara berkala.
                            </p>
                        </div>
                        <div class="card-1 mb-4 p-3 shadow-sm">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon text-success me-2">
                                    <i class="fa fa-check-circle fa-2x"></i>
                                </span>
                                <h4>Driver Profesional</h4>
                            </div>
                            <p>
                                Driver kami memiliki pengalaman di bidangnya, sehingga dapat mengurangi risiko perjalanan Anda.
                            </p>
                        </div>
                        <div class="card-1 mb-4 p-3 shadow-sm">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon text-success me-2">
                                    <i class="fa fa-check-circle fa-2x"></i>
                                </span>
                                <h4>Harga Terjangkau</h4>
                            </div>
                            <p>
                                Harga untuk sewa mobil dan paket wisata yang kami tawarkan sangat bersaing dengan layanan fasilitas yang kami berikan.
                            </p>
                        </div>
                        <div class="card-1 mb-4 p-3 shadow-sm">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon text-success me-2">
                                    <i class="fa fa-check-circle fa-2x"></i>
                                </span>
                                <h4>Layanan 24 Jam</h4>
                            </div>
                            <p>
                                Kami siap melayani kebutuhan Anda kapan saja, 24 jam sehari, 7 hari seminggu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Layanan Kami</h3>
            <div class="row service-grid-grids text-center">
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-car"></span>
                    </div>
                    <h4 class="mt-3">Sewa mobil</h4>
                    <p class="mt-3">Dengan unit mobil yang wangi, bersih, aman, nyaman dan dipastikan mobil dalam keadaan sehat </p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <h4 class="mt-3">Sewa driver</h4>
                    <p class="mt-3">Dengan driver professional tentang, mobil, pemahaman rute, Dan tingkat empati tinggi, serta kami pastikan untuk mampu membawa mobil dengan aman Dan nyaman.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-plane"></span>
                    </div>
                    <h4 class="mt-3">Paket wisata</h4>
                    <p class="mt-3">Wisata Yogyakarta, malang, banyuwagi, Dan Bali menjadi and Alan pada servise kami, karena tempat tersebut sangat indah dan sangat bagus untuk dikunjungi. Bukan hanya pemandangan tapi kuliner dan budaya yang terdapat pada lokasi tersebut</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 p-md-0 mb-4">
                    <div class="bg-image-left">

                    </div>
                </div>
                <div class="col-md-6 p-md-0 mb-4">
                    <div class="bg-image-right">

                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-0">
                            <div class="bg-image-bottom1">

                            </div>
                        </div>
                        <div class="col-md-6 pl-md-0">
                            <div class="bg-image-bottom2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <section class="destinations py-5" id="travel">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Sewa Mobil</h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <div class="card">
                    <img src="{{ asset('landing/images/mobil3.png') }}" alt="Deskripsi Gambar" class="card-image">
                    <div class="card-description">
                        <h5>Innova Reborn Facelift</h5>
                        <h3>Rp 650.000</h3>
                        <p>Include Mobil + Driver
                            Harga per Day
                            Excellent Service (VVIP)
                            Tidak termasuk BBM
                            Tidak termasuk Tol & Parkir
                        </p>
                        <p style="margin-top: 10px;color: red;font-size: 14px;">
                            Note :
                            *Harga khusus untuk wilayah Malang & Batu
                            *Tidak menerima Lepas Kunci
                        </p>
                    </div>
                    <div class="button-container">
                        <button class="rent">Sewa Sekarang</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('landing/images/mobil3.png') }}" alt="Deskripsi Gambar" class="card-image">
                    <div class="card-description">
                        <h5>All New Avanza</h5>
                        <h3>Rp 450.000</h3>
                        <p>Include Mobil + Driver
                            Harga per Day
                            Excellent Service (VVIP)
                            Tidak termasuk BBM
                            Tidak termasuk Tol & Parkir
                        </p>
                        <p style="margin-top: 10px;color: red;font-size: 14px;">
                            Note :
                            *Harga khusus untuk wilayah Malang & Batu
                            *Tidak menerima Lepas Kunci
                        </p>
                    </div>
                    <div class="button-container">
                        <button class="rent">Sewa Sekarang</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('landing/images/mobil3.png') }}" alt="Deskripsi Gambar" class="card-image">
                    <div class="card-description">
                        <h5>Toyota Alphard Facelift</h5>
                        <h3>Rp 3.000.000</h3>
                        <p>
                            Include Mobil + Driver
                            Harga per Day
                            Excellent Service (VVIP)
                            Termasuk BBM
                            Tidak termasuk Tol & Parkir
                        </p>
                        <p style="margin-top: 10px;color: red;font-size: 14px;">
                            *Note :
                            *Harga khusus untuk wilayah Malang & Batu
                            *Tidak menerima Lepas Kunci
                        </p>
                    </div>
                    <div class="button-container">
                        <button class="rent">Sewa Sekarang</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('landing/images/mobil3.png') }}" alt="Deskripsi Gambar" class="card-image">
                    <div class="card-description">
                        <h5>Toyota</h5>
                        <h3>Rp. 600.000/day</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis nunc vitae tortor commodo
                            pharetra. Aenean eget erat eu risus elementum tincidunt.
                        </p>
                        <p style="margin-top: 10px;color: red;font-size: 14px;">
                            *warning*
                        </p>
                    </div>
                    <div class="button-container">
                        <button class="rent">Sewa Sekarang</button>
                    </div>
                </div>
            </div>
            <button class="rent" style="margin-top: 2rem;margin-left: 30.5rem;">Lihat Lainnya</button>
        </div>
    </section>
    <!-- destinations -->
    <section class="destinations1 py-5" id="destinations">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Paket Wisata</h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">China</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/p1.jpg') }}" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><span class="fa fa-usd"></span>1000</li>

                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>China</h4>
                            <a href="#contact">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">Malaysia</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/p2.jpg') }}" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><span class="fa fa-usd"></span>1100</li>
                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Malaysia</h4>
                            <a href="#contact">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">Japan</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/p3.jpg') }}" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><span class="fa fa-usd"></span>1200</li>
                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Japan</h4>
                            <a href="#contact">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">Singapore</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/p4.jpg') }}" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><span class="fa fa-usd"></span>1300</li>
                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Singapore</h4>
                            <a href="#contact">Booking Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="rent" style="margin-top: 2rem;margin-left: 30.5rem;">Lihat Paket Lainnya</button>
        </div>
    </section>
    <!-- stats -->
    <section class="stats" id="stats">
        <div class="layer py-md-5 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row stat-grids">
                    <div class="col-lg-6 stats-left">
                        <h3 class="heading mb-4 text-li">Statistik</h3>
                        <p class="mb-3">Jika Anda tidak menemukan armada yang cocok , Anda bisa menghubungi admin kami.
                            Dapatkan sewa mobil malang dengan kualitas armada yang baik, harga terjangkau dan pelayanan
                            berkualitas</p>
                        <h4><span>15+</span> Tahun Pengalaman Karir</h4>
                    </div>
                    <div class="col-lg-6 grid1 stats-right mt-lg-0 mt-4 pl-5">
                        <div class="row">
                            <div class="col-sm-4 col-6 mb-4">
                            </div>
                            <div class="col-sm-4 col-6 mb-4">
                                <p>Pelanggan</p>
                                <h4>15k</h4>
                                <span class="fa fa-users mr-2"></span>
                            </div>
                            <div class="col-sm-4 col-6 mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!--/testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5">Komentar Para Pelanggan</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-6 test-info text-left mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s.
                        Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span>
                    </p>
                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('landing/images/te1.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>


                </div>
                <div class="col-lg-4 col-sm-6 test-info text-left mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s.
                        Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span>
                    </p>

                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('landing/images/te2.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right"> Abraham Smith</h3>


                </div>
                <div class="col-lg-4 col-sm-6 test-info text-left gap1 mb-4">
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s.
                        Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span>
                    </p>
                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('landing/images/te3.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                </div>
            </div>
        </div>
    </section>
    <!--//testimonials -->
    <!-- Contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Hubungi Kami</h3>
            <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Location</h6>
                    <p>The company name
                        <br>Addison Township, IL, USA.
                    </p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Phone & Email</h6>
                    <p>+(122) 123 456 7890</p>
                    <a href="mailto:info@example.com" class="mail">info@examplemail.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                    <div class="adress-icon">
                        <span class="fa fa-building"></span>
                    </div>
                    <h6>our branches</h6>
                    <p>india</p>
                    <p>china</p>

                </li>
            </ul>
        </div>
    </section>
    <!-- //Contact -->


    <!-- //contact us -->
@endsection
