<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Admin</title>
        <link rel="stylesheet" href="{{asset('admin/assets/css/main/app.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/pages/auth.css')}}">
        <link rel="shortcut icon" href="{{ asset('landing/images/Nicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('landing/images/Nicon.png') }}" type="image/png">
    </head>

<body>
    <div id="auth">

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"> <img src="{{ asset('landing/images/nawa.png') }}" class="img-" alt="" style="width: 199px;height:45px"></a>
            </div>
            <h1 class="auth-title">Halo, Admin!</h1>
            <p class="auth-subtitle mb-4">Silahkan Login jika anda adalah Admin kami!</p>

            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="name" class="form-control form-control-xl @error('username') is-invalid @enderror" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="email" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-4" type="submit">{{ __('Login') }}</button>
            </form>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>
</html>
