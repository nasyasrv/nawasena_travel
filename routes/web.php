<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ReviewController,GaleryController, RentCarController};

Route::get('/', function () {
    return view('landing.nawasena');
});


Route::get('/about_us', function () {
    return view('landing.aboutus');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\LandingController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sewa_mobil', [App\Http\Controllers\car::class, 'index'])->name('sewa');
route::resource('review', ReviewController::class);
route::resource('galery', GaleryController::class);
route::resource('rent', RentCarController::class);
