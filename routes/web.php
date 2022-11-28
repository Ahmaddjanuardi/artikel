<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/artikel1', function () {
    return view('artikel1');
});

Route::get('/artikel2', function () {
    return view('artikel2');
});
Route::get('/artikel3', function () {
    return view('artikel3');
});
Route::get('/artikel4', function () {
    return view('artikel4');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact')->name('contact');
Route::post('/send', [MailController::class, 'send'])->name('send.mail');
