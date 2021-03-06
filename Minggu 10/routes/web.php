<?php

use Illuminate\Support\Facades\Route,
	App\Http\Controllers\danicontroller,
	App\Http\Controllers\frontend\HomeController,
	App\Http\Controllers\backend\DashboardController,
	App\Http\Controllers\PendidikanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
	return ('Helo World');
});

Route::get('/belajar', function () {
	echo '<h1>Hello World</h1>';
	echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/page/{nomor}', function ($nomor) {
	return 'Ini Halaman ke' . $nomor;
});

Route::get('/gambar', function () {
	return view('gambar');
});

Route::get('user',[danicontroller::class, 'index']);

Route::resource('user', danicontroller::class);

Route::get("/dani", function(){
	return view("dani");
});

Route::resource('home', HomeController::class);

Route::resource('dashboard', DashboardController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web','auth'])->group(function () {
	Route::resource('dashboard', DashboardController::class);
	Route::resource('pendidikan', PendidikanController::class);
});

