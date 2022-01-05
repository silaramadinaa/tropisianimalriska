<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
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
    return view('front.home');
});

Route::get('/home', function () {
    return view('front.home');
})->name('home');

Route::get('/news', function () {
    return view('front.news');
})->name('news');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/galery', function () {
    return view('front.galery');
})->name('galery');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

//Route front controller
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/contact', [ContactController::class, 'create']);

// Route admin

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', [LoginController::class, 'auth']);

    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

    Route::get('/post', function () {
        return view('admin.post');
    });

    Route::post('/news', [NewsController::class, 'store']);
    Route::get('/news', [NewsController::class, 'index']);

});

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     });

//     Route::get('user', function () {
//         return view('admin.user');
//     });

//     Route::get('kategori', function () {
//         return view('admin.kategori');
//     });

//     Route::get('artikel', function () {
//         return view('admin.artikel');
//     });

// });

// Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
