<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PricingController;
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

Route::get('/', [Controller::class, 'index'])->name('landing.home.page');

Route::get('/contact-us', function () {
    $slider = getSliderData();
    return view('landing_page.contact-us', compact('slider'));
});

Route::post('/contact-us', [\App\Http\Controllers\Controller::class, 'sendEmail'])->name('sendemail.contact');

Route::get('/pricing/plan', [\App\Http\Controllers\PricingController::class, 'showLanding'])->name('landing.pricing.show');
Route::get('/cart/{id}', [CartController::class, 'store'])->name('cart.store');

Route::get('/faq', function () {
    $slider = getSliderData();
    return view('landing_page.faq', compact('slider'));
});

Route::get('/clients', [ClientController::class, 'showInLanding'])->name('landing.client');

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
Route::middleware(['auth'])->group(
    function () {
        Route::get('/controlPanel/sliderSection', [\App\Http\Controllers\InfoController::class, 'indexSlider'])->name('slider');
        Route::post('/controlPanel/sliderSection/store', [\App\Http\Controllers\InfoController::class, 'storeSlider'])->name('slider.update');

        Route::get('/controlPanel/aboutSection', [\App\Http\Controllers\InfoController::class, 'indexAbout']);
        Route::post('/controlPanel/aboutSection/store', [\App\Http\Controllers\InfoController::class, 'storeAbout'])->name('about.update');

        Route::get('/controlPanel/noteSection', [\App\Http\Controllers\InfoController::class, 'indexNote']);
        Route::post('/controlPanel/noteSection/store', [\App\Http\Controllers\InfoController::class, 'storeNote'])->name('note.update');

        Route::get('/controlPanel/linkSection', [\App\Http\Controllers\InfoController::class, 'indexLink'])->name('link.edit');
        Route::post('/controlPanel/linkSection/store', [\App\Http\Controllers\InfoController::class, 'storeLink'])->name('link.update');

        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
        Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
        Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

        Route::resource('blog', BlogController::class);
        Route::resource('project', ProjectController::class);
        Route::resource('client', ClientController::class);
        Route::resource('pricing', PricingController::class);

        Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');

        //Route::get('/controlPanel/serviceSection', [\App\Http\Controllers\ServiceController::class, 'index']);
        //Route::get('/controlPanel/serviceSection/create', [ServiceController::class, 'create'])->name('service.create');

    }
);
// blog in landing
Route::get('landing/blog', [BlogController::class, 'showLanding'])->name('bloglanding');
Route::get('landing/blog/{id}', [BlogController::class, 'showDetailsLanding'])->name('bloglandingdetails');
Route::post('landing/blog/comment/{id}', [BlogController::class, 'store_Comment'])->name('store.comment');

// project in landing
Route::get('landing/project/{id}', [ProjectController::class, 'showDetailsLanding'])->name('projectlandingdetails');
Route::post('landing/project/comment/{id}', [ProjectController::class, 'store_Comment'])->name('store.comment.project');

// comments for landing
Route::post('landing/comment', [Controller::class, 'storeComment'])->name('store.comment.info');

// payment getway
Route::get('landing/pricing/create', [CartController::class, 'indexCart'])->name('cart.show.payment');
Route::delete('landing/pricing/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');
Route::post('landing/pricing/store', [PaymentController::class, 'stripeOrder'])->name('stripe.order');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
