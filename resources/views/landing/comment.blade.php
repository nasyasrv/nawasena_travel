@extends('landing.layouts.app')
@section('content')

    <!-- stats -->
    <section class="stats">
        <div class="layer py-md-5 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row stat-grids">
                    <div class="col-lg-6 stats-left">
                        <h3 class="heading mb-4 text-li">Beri Kami komentar!</h3>
                        <p class="mb-3">Kami menghargai pendapat Anda! Silakan tinggalkan komentar Anda untuk membantu
                            kami meningkatkan layanan.</p>
                    </div>
                    <div class="col-lg-6 grid1 stats-right mt-lg-0 mt-4 pl-5">
                        <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Nama Kamu</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email Kamu</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label text-white">Komentar</label>
                                <textarea id="comment" type="text" rows="4"
                                          class="form-control @error('comment') is-invalid @enderror"
                                          name="comment" oninput="updateCharacterCount()"></textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="charCount" class="form-text text-white">0 karakter</small>
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
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
                <div class="slider-container">
                    <div class="slider">
                        @foreach ($review as $row)
                        <div class="review col-lg-4 col-sm-6 test-info text-left mb-4">
                            <p><span class="fa fa-quote-left"></span>{{ $row -> comment}}<span
                                    class="fa fa-quote-right"></span>
                            </p>
                            <h3 class="my-md-2 my-3 text-right">{{ $row -> name}}</h3>
                            <h3 class="my-md-2 my-3 text-right">{{ $row -> email}}</h3>
                        </div>
                        @endforeach
                    </div>
                    <button class="prev"> <i class="fa fa-arrow-left"></i></button>
                    <button class="next"><i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials -->

    <script>
        function updateCharacterCount() {
            const textarea = document.getElementById('comment');
            const charCount = document.getElementById('charCount');
            charCount.textContent = `${textarea.value.length} karakter`;
        }
    </script>
@endsection
