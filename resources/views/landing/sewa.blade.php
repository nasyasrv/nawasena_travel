@extends('landing.layouts.app')
@section('content')

    <section class="destinations py-5" id="travel">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Sewa Mobil</h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                @foreach ($rents as $car)
                <div class="card">
                    <img src="{{ asset('storage/' . $car->picture) }}" alt="Deskripsi Gambar" class="card-image">
                    <div class="card-description">
                        <h3>{{ $car->name }}</h3>
                        <h5>Rp {{ number_format($car->price) }}</h5>
                        <p class="mt-3">
                            <i class="fa fa-check-circle text-success"></i> {{$car->seat}} Seat <br>
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
                            <i class="fa fa-check-circle text-success"></i> {{$car->day_service}} Day Service <br>
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
                        <button class="rent">Sewa Sekarang</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
