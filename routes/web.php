<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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
//note
//dash board
Route::get('/controlPanel/sliderSection', [\App\Http\Controllers\InfoController::class, 'indexSlider'])->name('slider');
Route::post('/controlPanel/sliderSection/store', [\App\Http\Controllers\InfoController::class, 'storeSlider'])->name('slider.update');

Route::get('/controlPanel/aboutSection', [\App\Http\Controllers\InfoController::class, 'indexAbout']);
Route::post('/controlPanel/aboutSection/store', [\App\Http\Controllers\InfoController::class, 'storeAbout'])->name('about.update');

Route::get('/controlPanel/noteSection', [\App\Http\Controllers\InfoController::class, 'indexNote']);
Route::post('/controlPanel/noteSection/store', [\App\Http\Controllers\InfoController::class, 'storeNote'])->name('note.update');

//Route::get('/controlPanel/serviceSection', [\App\Http\Controllers\ServiceController::class, 'index']);
//Route::get('/controlPanel/serviceSection/create', [ServiceController::class, 'create'])->name('service.create');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::resource('blog', BlogController::class);
Route::resource('project', ProjectController::class);

Route::get('landing/blog', [BlogController::class, 'showLanding'])->name('bloglanding');
Route::get('landing/blog/{id}', [BlogController::class, 'showDetailsLanding'])->name('bloglandingdetails');
Route::post('landing/blog/comment/{id}', [BlogController::class, 'storeComment'])->name('store.Comment');

// Route::get('landing/project', [ProjectController::class, 'showLanding'])->name('projectlanding');
Route::get('landing/project/{id}', [ProjectController::class, 'showDetailsLanding'])->name('projectlandingdetails');
Route::post('landing/project/comment/{id}', [ProjectController::class, 'storeComment'])->name('store.Comment.project');

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__ . '/auth.php';
