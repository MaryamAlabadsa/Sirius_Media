<?php

use App\Http\Controllers\Controller;
use App\Models\Info;
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

Route::get('/', [Controller::class, 'index']);

Route::get('/contact-us', function () {
    $slider = getSliderData();
    return view('landing_page.contact-us', compact('slider'));
});

Route::get('/pricing', function () {
    $slider = getSliderData();
    return view('landing_page.pricing', compact('slider'));
});

Route::get('/faq', function () {
    $slider = getSliderData();
    return view('landing_page.faq', compact('slider'));
});

Route::get('/clients', function () {
    $slider = getSliderData();
    return view('landing_page.clients', compact('slider'));
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return back();
});

function getSliderData()
{
    return Info::select('json_data')
        ->where('json_key', 'slider')
        ->first()->slider;
//    return Info::where('json_key', 'slider')->value('json_data');
}

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__ . '/auth.php';
