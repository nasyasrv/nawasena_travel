<style>
    /* Mengubah flex direction menjadi row pada layar di bawah 1000px */
    @media (max-width: 1200px) {
        .navbar-nav {
            flex-direction: row !important;
            justify-content: space-between;
            padding: 0px;
            width: 100% !important;
        }

        .navbar-nav .nav-item {
            margin-bottom: 0; /* Menghilangkan jarak vertical antara item */
        }

        nav ul {
            margin-left: 0px !important;
        }
    }

    @media (max-width: 1000px) {
        .navbar-nav {
            flex-direction: row !important;
            justify-content: space-between;
            padding: 0px;
            width: 100% !important;
        }

        .navbar-nav .nav-item {
            margin-bottom: 0; /* Menghilangkan jarak vertical antara item */
        }

        nav ul {
            margin-left: 0px !important;
        }
    }

    @media (min-width: 1201px) {
        .nav-link, .nav-item {
            width: 100% !important;
            margin-bottom: 0; /* Menghilangkan jarak vertical antara item */
            display: inline-flex !important; /* Menjaga item tetap dalam satu baris */
            white-space: nowrap !important;
        }

        .navbar-nav {
            padding-left: 30px !important;
        }

        .navbar-collapse {
            width: 100% !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Menggerakkan tombol logout ke kanan */
        .button-logout {
            margin-left: 40px;
        }
    }

    /* Untuk tampilan mobile, posisi navbar ditengah secara vertikal dan horizontal */
    @media (max-width: 768px) {
        .navbar-nav {
            flex-direction: column !important; /* Pastikan tetap vertikal */
            justify-content: center; /* Posisi tengah secara horizontal */
            align-items: center; /* Posisi tengah secara vertikal */
            text-align: center; /* Untuk memastikan teks di tengah */
        }

        .navbar-nav .nav-item {
            margin-bottom: 15px; /* Menambahkan sedikit jarak antara item */
        }

        /* Menyesuaikan tampilan logo jika perlu */
        .navbar-brand {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    }
</style>

<header>
    <div class="container container-header">
        <!-- nav -->
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark py-3">
            <div class="container-fluid d-flex align-items-center">
                <!-- Logo -->
                <a class="navbar-brand navbar-brand-header" href="/">
                    <img src="{{ asset('landing/images/nawa.png') }}" class="img-header" alt="">
                </a>

                <!-- Toggle Button for Mobile/Tablet -->
                <div class="header-burger">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <!-- Navbar Links (Collapsed on Mobile) -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#travel">Sewa Mobil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#destinations">Paket Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('review.create')}}">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Kontak</a>
                        </li>
                        <li class="nav-item button-logout">
                            <a class="btn btn-danger" href="/login">
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- //nav -->
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
