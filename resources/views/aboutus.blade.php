@extends('landing.app')
@section('content')

<section>
     <!-- banner -->
     <div class="banner1">
            <div class="container">
                <div class="row">
                    <a href="/">Home/</a>
                    <h4>ABOUT US</h4>
                </div>
            </div>
    </div>
    <!-- //banner -->
</section>

<!-- banner-bottom -->
<section class="some-content py-5" id="about-us">
    <div class="container py-md-5">
        <div class="row about-vv-top mt-2">
            <div class="col-lg-6 about-info1">
                <h4 class="title-hny1  mb-md-5">About NAWASENA</h4>
                <p>Nawasena mempermudah Anda untuk keperluan transportasi. Melayani sewa mobil malang dan premium car dalam atau luar kota dengan berbagai armada yang ada dengan kapasitas yang berbeda beda. Sewa mobil innova, hiace commuter dan hiace premium tersedia untuk anda yang ingin berpergian dengan kapasitas yang besar dan eksklusif.</p>
            </div>
            <div class="col-lg-6 about-img  mt-md-4 mt-sm-4">
                <img src="{{ asset('landing/images/nawasena.png') }}" class="img-fluid about-pic" alt="">
            </div>
        </div>
    </div>
</section>
<section class="some-content py-5" id="about-us1">
    <div class="container py-md-5">
        <div class="row about-vv-top mt-2">
            <div class="col-lg-6 about-img mt-md-4 mt-sm-4">
                <img src="{{ asset('landing/images/layanan1.jpg') }}" class="img-fluid about-pic1" alt="">
            </div>
            <div class="col-lg-6 about-info2">
                <h4 class="title-hny2  mb-md-5">Transportation Services</h4>
                <p>Donec malesuada ex sit amet pretium sid ornare. Nulla congue scelerisque tellus, utpretium nulla
                    malesuada sedint. Suspendisse venenatis,Lorem ipsum dolor sit magna dolor.</p>
            </div>
        </div>
    </div>
</section>
<section class="some-content py-5" id="about-us">
    <div class="container py-md-5">
        <div class="row about-vv-top mt-2">
            <div class="col-lg-6 about-info1">
                <h4 class="title-hny1  mb-md-5">Our Location</h4>
                <p>Donec malesuada ex sit amet pretium sid ornare. Nulla congue scelerisque tellus, utpretium nulla
                    malesuada sedint. Suspendisse venenatis,Lorem ipsum dolor sit magna dolor.</p>
            </div>
            <div class="col-lg-6 about-img mt-md-4 mt-sm-4">
                <div class="map p-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.728106568!2d-0.24168153701090248!3d51.52877184090542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1544074523717"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
