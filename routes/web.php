<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
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


// front/public routes
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/reservations', function () {
    return view('pages.reservations');
})->name('reservations');


// admin routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(
    [
        'prefix' => 'category',
        'as' => 'category.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\CategoryController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\CategoryController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);

Route::group(
    [
        'prefix' => 'food',
        'as' => 'food.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\FoodController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\FoodController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\FoodController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\FoodController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\FoodController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\FoodController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);


Route::group(
    [
        'prefix' => 'gallery',
        'as' => 'gallery.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\CategoryController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\CategoryController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);


Route::group(
    [
        'prefix' => 'slider',
        'as' => 'slider.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\SliderController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\SliderController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\SliderController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\SliderController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\SliderController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\SliderController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
