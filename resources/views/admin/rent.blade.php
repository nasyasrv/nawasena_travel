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
                                        <th>Include Driver</th>
                                        <th>Excellent Service</th>
                                        <th>Include Fuel</th>
                                        <th>Include Toll</th>
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
                                            <td><i class="fa {{ $car->include_driver ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i></td>
                                            <td><i class="fa {{ $car->excellent_service ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i></td>
                                            <td><i class="fa {{ $car->include_fuel ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i></td>
                                            <td><i class="fa {{ $car->include_toll ? 'fa-check-circle text-success' : 'fa-times-circle text-danger' }}"></i></td>
                                            <td>{{ $car->note }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $car->picture) }}" alt="picture_nawasena" style="width: 100px;">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#backdrop1{{$car->id}}">
                                                    <i class="bi bi-pen"></i>
                                                </button>
                                                <form action="" method="POST">
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
                                name="price">
                            @error('price')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="include_driver">Include Driver?</label>
                            <select name="include_driver"
                                class="form-control @error('include_driver') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('include_driver')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="excellent_service">Apakah layanannya bagus?</label>
                            <select name="excellent_service"
                                class="form-control @error('excellent_service') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('excellent_service')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="include_fuel">Termasuk Bahan Bakar?</label>
                            <select name="include_fuel" class="form-control @error('include_fuel') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('include_fuel')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="include_toll">Termasuk Biaya Tol?</label>
                            <select name="include_toll" class="form-control @error('include_toll') is-invalid @enderror">
                                <option value="" selected disabled>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                            @error('include_toll')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="note">Catatan</label>
                            <input type="text" class="form-control @error('note') is-invalid @enderror" id="note"
                                name="note">
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
        <div class="modal fade text-left" id="backdrop1{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
            data-bs-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel4">Edit Gambar</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="basicInput">Nama Kendaraan </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="basicInput" name="name" value="{{$data->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="picture">Gambar</label><br>
                                <img src="{{ asset('storage/' . $data->picture) }}" width="350px" alt="picture">
                                <input type="file" class="form-control mt-2 @error('picture') is-invalid @enderror" id="picture"
                                    name="picture">
                                @error('picture')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Harga</label>
                                <input class="form-control @error('price') is-invalid @enderror" type="text"
                                    id="formFile" name="price" value="{{$data->price}}">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Apakah Include dengan Dirver?</label>
                                <select name="include_driver" class="form-control">
                                    <option selected disabled value="{{$data->include_driver}}">
                                        @if ($data->include_driver == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('include_driver')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Apakah Pelayanannya bagus?</label>
                                <select name="excellent_service" class="form-control">
                                    <option selected disabled value="{{$data->excellent_service}}">
                                        @if ($data->excellent_service == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('excellent_service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Apakah termasuk biaya bahan bakar?</label>
                                <select name="include_fuel" class="form-control">
                                    <option selected disabled value="{{$data->include_fuel}}">
                                        @if ($data->include_fuel == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('include_fuel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Apakah termasuk biaya toll?</label>
                                <select name="include_toll" class="form-control">
                                    <option selected disabled value="{{$data->include_toll}}">
                                        @if ($data->include_toll == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('include_toll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="basicInput">Catatan</label>
                                <input type="text" class="form-control @error('note') is-invalid @enderror"
                                    id="basicInput" name="note" value="{{$data->note}}">
                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
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
