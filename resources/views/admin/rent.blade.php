@extends('admin.layouts.app')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Sewa Mobile</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sewa Mobile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backdrop">
                            <i class="bi bi-plus"></i>
                            Tambah data
                        </button>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Seat</th>
                                        <th>Mobil + Driver</th>
                                        <th>VVIP Service</th>
                                        <th>Tujuan Fleksibel</th>
                                        <th>Private & Luxury Class</th>
                                        <th>Day Service</th>
                                        <th>Hotel, Tiket Wisata</th>
                                        <th>BBM, Toll, Parkir, Penyebrangan</th>
                                        <th>Catatan</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($rent as $car)
                                    <tbody>
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $car->name }}</td>
                                            <td>Rp {{ number_format($car->price) }}</td>
                                            <td>{{ $car->seat }}</td>
                                            <td><i
                                                    class="fa {{ $car->car_driver ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td><i
                                                    class="fa {{ $car->vvip_service ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td><i
                                                class="fa {{ $car->flexible ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td><i
                                                    class="fa {{ $car->private_luxuryclass ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td>{{ $car->day_service }}</td>
                                            <td><i
                                                    class="fa {{ $car->hotel_travelticket ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td><i
                                                    class="fa {{ $car->bbm_toll_park_crossing ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i>
                                            </td>
                                            <td>{{ $car->note }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $car->picture) }}" alt="picture_nawasena"
                                                    style="width: 100px;">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal"
                                                    data-bs-target="#backdrop1{{ $car->id }}">
                                                    <i class="bi bi-pen"></i>
                                                </button>
                                                <form action="{{ route('rent.destroy', $car->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>

            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2025 &copy; Nawasena</p>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
        data-bs-backdrop="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel4">Tambahkan Kendaraan</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rent.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name">Nama Kendaraan</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name">
                            @error('name')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="picture">Gambar</label>
                            <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                                name="picture">
                            @error('picture')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price">Harga</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="gunakan format lengkap seperti 10000">
                            @error('price')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="seat">Seat</label>
                            <input type="number" class="form-control @error('seat') is-invalid @enderror" id="price"
                                name="seat" placeholder="pilih jumlah tempat duduk minimal 1">
                            @error('seat')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="car_driver">Mobil + Driver</label>
                            <select name="car_driver" class="form-control @error('car_driver') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('car_driver')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="vvip_service">VVIP Service</label>
                            <select name="vvip_service" class="form-control @error('vvip_service') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('vvip_service')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="flexible">Tujuan Fleksibel</label>
                            <select name="flexible" class="form-control @error('flexible') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('flexible')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="private_luxuryclass">Private & Luxury Class</label>
                            <select name="private_luxuryclass"
                                class="form-control @error('private_luxuryclass') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('private_luxuryclass')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="day_service">Day Service</label>
                            <input type="number" class="form-control @error('day_service') is-invalid @enderror" id="price"
                                name="day_service" placeholder="pilih jumlah hari minimal 1">
                            @error('day_service')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hotel_travelticket">Hotel & Tiket Wisata</label>
                            <select name="hotel_travelticket"
                                class="form-control @error('hotel_travelticket') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('hotel_travelticket')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bbm_toll_park_crossing">BBM, Toll, Parkir, Penyebrangan</label>
                            <select name="bbm_toll_park_crossing"
                                class="form-control @error('bbm_toll_park_crossing') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('bbm_toll_park_crossing')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="note">Catatan</label>
                            <textarea class="form-control @error('note') is-invalid @enderror" id="note" name="note">{{ old('note') }}</textarea>
                            @error('note')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ml-1">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($rent as $data)
        <div class="modal fade text-left" id="backdrop1{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel4">Edit Gambar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('rent.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name">Nama Kendaraan</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" value="{{$data->name}}">
                                @error('name')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="picture">Gambar</label>
                                <img src="{{ asset('storage/' . $data->picture) }}" width="350px" alt="picture">
                                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                                    name="picture">
                                @error('picture')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price">Harga</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                    name="price" value="{{ $data->price }}" placeholder="gunakan format lengkap seperti 10000">
                                @error('price')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="seat">Seat</label>
                                <input type="number" class="form-control @error('seat') is-invalid @enderror" id="price"
                                    name="seat" value="{{ $data->seat }}" placeholder="pilih jumlah tempat duduk minimal 1">
                                @error('seat')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="car_driver">Mobil + Driver</label>
                                <select name="car_driver" class="form-control @error('car_driver') is-invalid @enderror">
                                    <option value="{{ $data->car_driver }}" selected disabled>
                                        @if($data->car_driver === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('car_driver')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="vvip_service">VVIP Service</label>
                                <select name="vvip_service" class="form-control @error('vvip_service') is-invalid @enderror">
                                    <option value="{{ $data->vvip_service }}" selected disabled>
                                        @if ($data->vvip_service === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('vvip_service')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="flexible">Tujuan Fleksibel</label>
                                <select name="flexible" class="form-control @error('flexible') is-invalid @enderror">
                                    <option value="{{ $data->flexible }}" selected disabled>
                                        @if($data->flexible === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('flexible')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="private_luxuryclass">Private & Luxury Class</label>
                                <select name="private_luxuryclass"
                                    class="form-control @error('private_luxuryclass') is-invalid @enderror">
                                    <option value="{{ $data->private_luxuryclass }}" selected disabled>
                                        @if($data->private_luxuryclass === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('private_luxuryclass')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="day_service">Day Service</label>
                                <input type="number" class="form-control @error('day_service') is-invalid @enderror" id="price"
                                    name="day_service" value="{{$data->day_service}}" placeholder="pilih jumlah hari minimal 1">
                                @error('day_service')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hotel_travelticket">Hotel & Tiket Wisata</label>
                                <select name="hotel_travelticket"
                                    class="form-control @error('hotel_travelticket') is-invalid @enderror">
                                    <option value="{{$data->hotel_travelticket}}" selected disabled>
                                        @if($data->hotel_travelticket === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('hotel_travelticket')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="bbm_toll_park_crossing">BBM, Toll, Parkir, Penyebrangan</label>
                                <select name="bbm_toll_park_crossing"
                                    class="form-control @error('bbm_toll_park_crossing') is-invalid @enderror">
                                    <option value="{{ $data->bbm_toll_park_crossing }}" selected disabled>
                                        @if($data->bbm_toll_park_crossing === 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('bbm_toll_park_crossing')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="note">Catatan</label>
                                <textarea class="form-control @error('note') is-invalid @enderror" id="note" name="note">{{ $data->note }}</textarea>
                                @error('note')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
