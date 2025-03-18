<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nawasena</title>
  <link rel="icon" type="image/png" href="{{ asset('landing/images/Nicon.png') }}">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  width: 100%;
  max-width: 600px;
}

.form-box {
  background: white;
  padding: 40px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  width: 100%;
  max-width: 400px;
  text-align: center;
  opacity: 0;
  animation: fadeIn 0.5s forwards;
}

.form-box h2 {
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
}

.textbox {
  margin-bottom: 20px;
}

.textbox input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #45a049;
}

.google-btn button {
  background-color: #db4437;
  color: white;
  margin-top: 10px;
}

.google-btn button:hover {
  background-color: #c1351d;
}

p {
  margin-top: 20px;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

    </style>
  <div class="form-container">
    <!-- Login Form -->
    <div class="form-box" id="login-box">
      <h2>Login</h2>
      <form method="post" action="{{route('login')}}">
        @csrf
        <div class="textbox">
            <input id="username" type="text" placeholder="Username" class="@error('name') is-invalid @enderror" name="name" value="{{old('name')}}" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="textbox">
            <input id="email" type="email" placeholder="email" class="@error('email') is-invalid @enderror" name="email" value="{{old('email')}}" autocomplete="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        <div class="textbox">
            <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" autocomplete="current-password" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <button type="submit">{{ __('Login') }}</button>
      </form>
    </div>
  </div>
</body>
</html>
