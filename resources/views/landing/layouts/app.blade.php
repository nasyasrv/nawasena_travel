
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nawasena</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- css files -->
    <link rel="icon" type="image/png" href="{{ asset('landing/images/Nicon.png') }}">
    <link href="{{asset('landing/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('landing/css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="{{asset('landing/css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('landing/css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

	<!-- //css files -->
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<style>
    .whatsapp-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 1000;
    }

    /* Animasi fade-in */
    @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }
        20% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Animasi fade-out */
    @keyframes fadeOutRight {
        80% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(50px);
        }
    }

    .whatsapp-text {
        background-color: white;
        color: #25D366;
        padding: 10px 15px;
        border-radius: 20px;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        display: inline-block;
        opacity: 0;

        /* Animasi masuk dan keluar berulang */
        animation: fadeInRight 2s ease-in-out 2s infinite,
                   fadeOutRight 2s ease-in-out 7s infinite;
    }

    .whatsapp-float {
        background-color: #25D366;
        color: white;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 28px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    .animated {
        animation: float 1.5s infinite ease-in-out;
    }
</style>

<body>

@include('landing.layouts.header')

@yield('content')
@stack('contens')

@include('landing.layouts.footer')

<!-- move top -->
<div class="move-top text-right">
<a href="#home" class="move-top">
    <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
</a>
</div>
<div class="whatsapp-container">
    <a href="https://wa.me/+6282245958540" class="whatsapp-text">
        Contact us for more
    </a>
    <a href="https://wa.me/+6282245958540" class="whatsapp-float animated">
        <span class="fab fa-whatsapp"></span>
    </a>
</div>
@yield('script')
@stack('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.review');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentIndex = 0;
        const visibleSlides = 3;
        const slideWidth = slides[0].offsetWidth + 10; // Adjusted for reduced margin
        const autoSlideInterval = 3000; // Auto-slide every 3 seconds

        function updateSlider() {
            const offset = -currentIndex * slideWidth; // Calculate position based on card width
            slider.style.transform = `translateX(${offset}px)`; // Fixed template literal
        }

        function showNextSlide() {
            currentIndex = (currentIndex < slides.length - visibleSlides) ? currentIndex + 1 : 0;
            updateSlider();
        }

        function showPrevSlide() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - visibleSlides;
            updateSlider();
        }

        nextButton.addEventListener('click', showNextSlide);
        prevButton.addEventListener('click', showPrevSlide);

        // Auto-slide
        let autoSlide = setInterval(showNextSlide, autoSlideInterval);

        // Stop auto-slide on user interactions
        prevButton.addEventListener('mouseenter', () => clearInterval(autoSlide));
        nextButton.addEventListener('mouseenter', () => clearInterval(autoSlide));
        slider.addEventListener('mouseenter', () => clearInterval(autoSlide));

        // Resume auto-slide when user stops interacting
        slider.addEventListener('mouseleave', () => autoSlide = setInterval(showNextSlide, autoSlideInterval));
    });
</script>
</body>
</html>


