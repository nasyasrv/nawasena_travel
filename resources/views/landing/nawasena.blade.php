@extends('landing.layouts.app')
@section('content')
    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        /* Hero Slider */
        .hero-slider {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            height: 100vh;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -2;
            /* Gambar berada di belakang overlay */
        }

        .slide::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            /* Warna overlay, sesuaikan opasitas */
            z-index: -1;
            /* Overlay berada di atas gambar tapi di bawah teks */
        }

        /* Static Text */
        .static-banner-text {
            position: absolute;
            top: 39%;
            color: white;
            text-align: center;
            z-index: 3;
        }

        .static-banner-text h3 {
            font-size: 49px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .static-banner-text p {
            font-size: 18px;
            line-height: 1.5;
            margin-left: 76px;
            margin-right: 76px;
        }

        /* Navigation Buttons */
        .navigation {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 2;
        }

        .navigation button {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 20px;
        }

        .navigation button:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Three equal columns */
            grid-auto-rows: minmax(150px, auto);
            /* Allow rows to adapt to content */
            gap: 10px;
            /* Space between images */
            margin: 0;
            /* Remove margin */
        }

        .photo-item {
            overflow: hidden;
            /* Hide overflow */
        }

        .photo-item img {
            width: 100%;
            /* Make images responsive */
            height: 100%;
            /* Make height fill the container */
            object-fit: cover;
            /* Crop to fill */
            display: block;
            /* Remove bottom spacing */
        }

        /* Optional: You can still use nth-child for specific spans if needed */
        .photo-item:nth-child(1) {
            grid-column: span 2;
            /* Span two columns */
            grid-row: span 2;
            /* Span two rows */
        }

        .photo-item:nth-child(7) {
            grid-column: span 2;
            /* Span two columns */
            grid-row: span 2;
            /* Span two rows */
        }


        /* Continue for additional specific item sizes as needed */

        /* Continue for additional specific item sizes as needed */
    </style>

    <section>
        <div class="hero-section" id="home">
            <!-- Static Banner Text -->
            <div class="static-banner-text">
                <h3 class="b-w3ltxt text-capitalize mt-md-4">PILIHAN SEWA MOBIL TERBAIK</h3>
                <p>
                    Kami memberikan pilihan Sewa mobil terbaik mulai dari standard class, premium class, dan sampai
                    royal class. Dengan harga bersaing, baik untuk acara dinas, wisata, maupun keluarga, dan semua
                    kebutuhan Anda.
                </p>
            </div>
            <!-- Slider -->
            <div class="hero-slider">
                <div class="slides">
                    <div class="slide">
                        <img src="{{ asset('landing/images/1.jpg') }}" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('landing/images/2.jpg') }}" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('landing/images/layanan.jpg') }}" alt="Slide 3">
                    </div>
                </div>

                <!-- Navigation -->
                <div class="navigation">
                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- //banner -->
    <section class="destinations py-5" id="travel">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Sewa Mobil</h3>
            <div class="car-container">
                @foreach ($rent as $car)
                    @if ($car->count() == 1)
                        <div class="card card1">
                            <img src="{{ asset('storage/' . $car->picture) }}" alt="Deskripsi Gambar" class="card-image">
                            <div class="card-description">
                                <h3>{{ $car->name }}</h3>
                                <h5>Rp {{ number_format($car->price) }}</h5>
                                <p class="mt-3">
                                    <i class="fa fa-check-circle text-success"></i> {{ $car->seat }} Seat <br>
                                    <i
                                        class="fa {{ $car->car_driver ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Mobil & Driver <br>
                                    <i
                                        class="fa {{ $car->vvip_service ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    VVIP Service <br>
                                    <i
                                        class="fa {{ $car->flexible ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Tujuan Fleksibel <br>
                                    <i
                                        class="fa {{ $car->private_luxuryclass ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Private & Luxury Class <br>
                                    <i class="fa fa-check-circle text-success"></i> {{ $car->day_service }} Day Service
                                    <br>
                                    <i
                                        class="fa {{ $car->hotel_travelticket ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Hotel & Travel Ticket <br>
                                    <i
                                        class="fa {{ $car->bbm_toll_park_crossing ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    BBM, Toll, Parkir, Penyebran <br>
                                </p>
                                <p style="margin-top: 10px;color: red;font-size: 14px;">
                                    *Notes :
                                    {!! nl2br(e($car->note)) !!}*
                                </p>
                            </div>
                            <div class="button-container">
                                <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A" class="rent">Sewa Sekarang</a>
                            </div>
                        </div>
                    @else
                        <div class="card w-100">
                            <img src="{{ asset('storage/' . $car->picture) }}" alt="Deskripsi Gambar" class="card-image">
                            <div class="card-description">
                                <h3>{{ $car->name }}</h3>
                                <h5>Rp {{ number_format($car->price) }}</h5>
                                <p class="mt-3">
                                    <i class="fa fa-check-circle text-success"></i> {{ $car->seat }} Seat <br>
                                    <i
                                        class="fa {{ $car->car_driver ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Mobil & Driver <br>
                                    <i
                                        class="fa {{ $car->vvip_service ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    VVIP Service <br>
                                    <i
                                        class="fa {{ $car->flexible ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Tujuan Fleksibel <br>
                                    <i
                                        class="fa {{ $car->private_luxuryclass ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Private & Luxury Class <br>
                                    <i class="fa fa-check-circle text-success"></i> {{ $car->day_service }} Day Service
                                    <br>
                                    <i
                                        class="fa {{ $car->hotel_travelticket ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    Hotel & Travel Ticket <br>
                                    <i
                                        class="fa {{ $car->bbm_toll_park_crossing ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                    BBM, Toll, Parkir, Penyebran <br>
                                </p>
                                <p style="margin-top: 10px;color: red;font-size: 14px;">
                                    *Notes :
                                    {!! nl2br(e($car->note)) !!}*
                                </p>
                            </div>
                            <div class="button-container">
                                <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A" class="rent">Sewa Sekarang</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


            <div class="d-flex w-100 justify-content-center align-items-center">

                <a type="button" class="rent mt-3" style="" href="{{ route('sewa') }}">Lihat
                    Lainnya</a>
            </div>
        </div>
    </section>
    <!-- destinations -->
    <section class="destinations1 py-5" id="destinations">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Paket Wisata</h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">YOGYAKARTA</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/Yogyakarta.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Yogyakarta</h4>
                            <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">MALANG</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/Malang.webp') }}" class="img-fluid" alt="">
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Malang</h4>
                            <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">BANYUWANGI</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/Banyuwangi.jpeg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Banyuwangi</h4>
                            <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3">BALI</h4>
                    <div class="image-position position-relative">
                        <img src="{{ asset('landing/images/Bali.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4>Bali</h4>
                            <a href="https://wa.me/6282245958540?text=Hallo%20Nawasena%20Transportation%0A%0ASaya%20berminat%20untuk%20menyewa%20kendaraan%20dengan%20rincian%20sbb%20%3A%20%0A%0AAtas%20Nama%20%3A%20%0ADari%20Perusahaan%2Finstansi%2Findividu%20%3A%0ANama%20Kendaraan%20%3A%20%0AJumlah%20kendaraan%20%3A%0ATanggal%20%26%20Bulan%20pemakaian%20%3A%0ALokasi%20Jemput%20%3A%0ATujuan%20%3A%0AWaktu%20Sewa%20%3A">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-bottom -->
    <section class="some-content py-5" id="about">
        <div class="container py-md-5">
            <div class="row about-vv-top mt-2">
                <div class="col-lg-6 about-info1">
                    <div class="row">
                        <h4 class="title-hny md-5 mx-3" style="color:#FF0000;"> <strong>NAWASENA</strong></h4>
                        <h5 class="title-hny second-hny md-5 mb-3 mx-3"> <strong>TRANSPORTATION SERVICE</strong></h5>
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
                    <div class="read-more-button mt-4">
                        <a href="/about_us" class="read-more btn">Baca Lebih Banyak</a>
                    </div>
                </div>
                <div class="col-lg-6 about-img">
                    <img src="{{ asset('landing/images/nred.png') }}" class="img-fluid about-pic" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-->
    <section class="testimonials py-5">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5">Kenapa Memilih Kami?</h3>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6 mt-md-4 mt-sm-4 canvas-banner-img">
                    <img src="{{ asset('landing/images/owner1.jpg') }}" class="banner-img img-fluid rounded"
                        alt="Layanan Kami">
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
    <!-- services -->
    <section class="services py-5">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Layanan Kami</h3>
            <div class="row service-grid-grids text-center">
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-car"></span>
                    </div>
                    <h4 class="mt-3">Sewa mobil</h4>
                    <p class="mt-3 text-justify">Dengan unit mobil yang wangi, bersih, aman, nyaman dan dipastikan mobil
                        dalam keadaan
                        sehat. </p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <h4 class="mt-3">Sewa driver</h4>
                    <p class="mt-3 text-justify">Dengan driver professional tentang, mobil, pemahaman rute, Dan tingkat
                        empati tinggi,
                        serta kami pastikan untuk mampu membawa mobil dengan aman Dan nyaman.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <span class="fa fa-plane"></span>
                    </div>
                    <h4 class="mt-3">Paket wisata</h4>
                    <p class="mt-3 text-justify">Wisata Yogyakarta, Malang, Banyuwagi dan Bali menjadi and Alan pada
                        servise kami,
                        karena tempat tersebut sangat indah dan sangat bagus untuk dikunjungi. <br>Bukan hanya pemandangan
                        tapi
                        kuliner dan budaya yang terdapat pada lokasi tersebut.</p>
                </div>
            </div>
            <div class="photo-grid">
                @foreach ($galery as $row)
                    <div class="photo-item">
                        <img src="{{ asset('storage/' . $row->picture) }}" alt="{{ $row->name }}">
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- //services -->
    <section class="testimonials1 py-5">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5">Fasilitas Kami</h3>
            <div class="canvas-services align-items-center mt-4">
                <!-- Top row with 4 cards -->
                <div class="w-100">
                    <div class="card-2 h-fit mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-car fa-2x mb-3 mt-4"></i> <!-- Icon Mobil Sehat -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Mobil Sehat</h4>
                        </div>
                        <p>
                            Mobil sehat adalah kendaraan yang selalu terawat, bersih, dan siap memberikan kenyamanan serta
                            keamanan di setiap perjalanan
                        </p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card-2 h-fit mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-broom fa-2x mb-3 mt-4"></i> <!-- Icon Mobil Bersih -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Mobil Bersih</h4>
                        </div>
                        <p>
                            Mobil bersih adalah kendaraan yang selalu dijaga kebersihannya, memberikan kenyamanan dan
                            pengalaman berkendara yang menyenangkan.
                        </p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card-2 h-fit mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-smile-beam fa-2x mb-3 mt-4"></i> <!-- Icon Mobil Wangi -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Mobil Wangi</h4>
                        </div>
                        <p>
                            Mobil wangi menghadirkan suasana segar dan nyaman, membuat perjalanan semakin menyenangkan.
                        </p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card-2 h-fit mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-shield-alt fa-2x mb-3 mt-4"></i> <!-- Icon Mobil Aman-Nyaman -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Mobil Aman-Nyaman</h4>
                        </div>
                        <p>
                            Mobil aman-nyaman memberikan perlindungan maksimal dan kenyamanan terbaik untuk perjalanan tanpa
                            khawatir.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4 grid-service-2">
                <!-- Bottom row with 3 cards -->
                <div class="w-100">
                    <div class="card-3 card-service-2 mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-handshake fa-2x mb-3"></i> <!-- Icon Driver Ramah -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Driver Ramah</h4>
                        </div>
                        <p>
                            Driver ramah selalu siap melayani dengan senyuman, menjadikan perjalanan lebih menyenangkan dan
                            penuh kehangatan.
                        </p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card-3 card-service-2 mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-user-tie fa-2x mb-3"></i> <!-- Icon Driver Pengalaman -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Driver Pengalaman</h4>
                        </div>
                        <p>
                            Driver berpengalaman menjamin perjalanan yang aman, efisien, dan bebas khawatir di segala
                            kondisi.
                        </p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="card-3 card-service-2 mb-4 p-3 shadow-sm text-center">
                        <i class="fa fa-briefcase fa-2x mb-3 m-icon"></i> <!-- Icon Driver Profesional -->
                        <div class="d-flex align-items-center mb-2">
                            <h4>Driver Profesional</h4>
                        </div>
                        <p>
                            Driver profesional mengutamakan keselamatan, ketepatan waktu, dan pelayanan terbaik di setiap
                            perjalanan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stats -->
    <!-- //stats -->
    <!--/testimonials -->
    <section class="testimonials py-5">
        <div class="container py-md-5">
            <h3 class="heading heading1 text-center mb-3 mb-sm-5">Komentar Para Pelanggan</h3>
            <div class="row">
                <div class="slider-container">
                    <div class="slider">
                        @foreach ($review as $data)
                            <div class="review col-lg-4 col-sm-6 test-info text-left mb-4">
                                <p><span class="fa fa-quote-left"></span>{{ $data->comment }} <span
                                        class="fa fa-quote-right"></span>
                                </p>
                                <h3 class="my-md-2 my-3 text-right">{{ $data->email }}</h3>
                                <h3 class="my-md-2 my-3 text-right">{{ $data->name }}</h3>
                            </div>
                        @endforeach
                    </div>
                    <button class="prev"> <i class="fa fa-arrow-left"></i></button>
                    <button class="next"><i class="fa fa-arrow-right"></i></button>
                </div>
                <div class="d-flex justify-content-center w-100 mt-3">
                    <a href="{{ route('review.create') }}" class="btn btn-light">Tambah Komentar</a>
                </div>

            </div>
        </div>
    </section>
    <!--//testimonials -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelector(".slides");
            const slide = document.querySelectorAll(".slide");
            const prev = document.querySelector(".prev");
            const next = document.querySelector(".next");

            let currentIndex = 0;
            const totalSlides = slide.length;

            // Function to show slide
            function showSlide(index) {
                if (index < 0) {
                    currentIndex = totalSlides - 1; // Wrap to last slide
                } else if (index >= totalSlides) {
                    currentIndex = 0; // Wrap to first slide
                } else {
                    currentIndex = index;
                }
                slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            // Event listeners for navigation
            prev.addEventListener("click", () => {
                showSlide(currentIndex - 1);
            });

            next.addEventListener("click", () => {
                showSlide(currentIndex + 1);
            });

            // Auto-slide every 5 seconds
            setInterval(() => {
                showSlide(currentIndex + 1);
            }, 5000);

            // Initial display
            showSlide(currentIndex);
        });
    </script>
@endsection
