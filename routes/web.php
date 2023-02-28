<?php

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

Route::get('/', [App\Http\Controllers\Controller::class,'index']);
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/clients', function () {
    return view('clients');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
