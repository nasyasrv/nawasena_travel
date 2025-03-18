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
                        <h5>{{ $car->name }}</h5>
                        <h3>Rp {{ number_format($car->price) }}</h3>
                        <p><i class="fa {{ $car->include_driver ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i> Include Mobil + Driver <br>
                           <i class="fa {{ $car->excellent_service ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i> Excellent Service (VVIP) <br>
                           <i class="fa {{ $car->include_fuel ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i> termasuk BBM <br>
                           <i class="fa {{ $car->include_toll ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i> termasuk Tol & Parkir
                        </p>
                        <p style="margin-top: 10px;color: red;font-size: 14px;">
                            Note :
                            *{{ $car->note }}
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
