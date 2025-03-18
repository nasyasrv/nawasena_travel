<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex nav-dark">
			<div id="logo">
				<h1> <a href="index.html"><img src="{{ asset('landing/images/nawa.png') }}" class="img-fluid" alt="" style="width: 212px;
    margin-top: -4px;
    margin-left: 71px;
    padding: 3px;"></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul>
				<li class="active"><a href="/">Home</a></li>
				<li class=""><a href="#travel">Sewa Mobil</a></li>
				<li class=""><a href="#destinations">Paket Wisata</a></li>
                <li class=""><a href="#about">Tentang kami</a></li>
				<li class=""><a href="{{route('review.create')}}">Review</a></li>
				<li class=""><a href="#footer">Contact us</a></li>
                <li class="mr-3">
                    <a class="btn btn-danger me-4" href="/login" style="margin-left: 75px;
    margin-top: -8px;"><i class="fas fa-sign-in-alt"></i></a>
                </li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
