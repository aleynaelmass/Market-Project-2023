<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/girisyap', function () {
    return view('admin-login');
});

Route::get('/adminbilgileri', function () {
    return view('admin-bilgileri');
});

Route::get('/admindashboard', function () {
    return view('admin-dashboard');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/satisislemleri', function () {
    return view('satis-islemleri');
});
Route::get('/saticibilgileri', function () {
    return view('satıcı-bilgileri');
});
Route::get('/saticidashboard', function () {
    return view('seller-dashboard2');
});
Route::get('/satici-giris', function () {
    return view('seller-login');
});
Route::get('/urunler', function () {
    return view('urunler');
});

Route::get('/barkod-oku', function () {
    return view('scan-barcode');
})->name('scan-barcode');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
