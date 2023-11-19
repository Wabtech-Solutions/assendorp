<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

// Route::get('/layout', function () {
//     return view('layout');
// });

Route::get('/over', function () {
    return view('over');
});


Route::get('/goedkope-rijles-zwolle', function () {
    return view('GRZ');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/404', function () {
    return view('404');
});
Route::get('/500', function () {
    return view('500');
});

Route::get('/contact', [ContactController::class, 'index']);
// Route::post('/contact', [ContactController::class, 'store'])->name('contact');


Route::post('/', [MailController::class,'planRijles'])->name('planRijles');
Route::post('/contact', [MailController::class,'contact'])->name('contact');
