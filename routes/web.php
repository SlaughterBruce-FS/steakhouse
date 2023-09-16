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

// Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name('home');

// Route::get('/', [\App\Http\Controllers\FrontController::class, 'store'])->name('store');

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
        'prefix' => 'blogs',
        'as' => 'blogs.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\BlogController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\BlogController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{slug}/{id}/edit', [\App\Http\Controllers\BlogController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\BlogController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{slug}/{id}', [\App\Http\Controllers\BlogController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\BlogController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');

        // start photos route

        Route::get('/{slug}/{id}/photos', [\App\Http\Controllers\BlogPhotosController::class, 'index'])
            ->middleware(['auth'])->name('photos');

        Route::get('/{slug}/{id}/photos/create', [\App\Http\Controllers\BlogPhotosController::class, 'create'])
            ->middleware(['auth'])->name('photos.create');


        Route::post('/{slug}/{id}/photos', [\App\Http\Controllers\BlogPhotosController::class, 'store'])
            ->middleware(['auth'])->name('photos.store');

        Route::get('/{slug}/{id}/photos/{photo_id}/delete', [\App\Http\Controllers\BlogPhotosController::class, 'destroy'])
            ->middleware(['auth'])->name('photos.destroy');

        Route::get('/{slug}/{id}/photos/{photo_id}/featured', [\App\Http\Controllers\BlogPhotosController::class, 'featured'])
            ->middleware(['auth'])->name('photos.featured');
    }
);

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
        'prefix' => 'discount',
        'as' => 'discount.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\DiscountController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\DiscountController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\DiscountController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\DiscountController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\DiscountController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\DiscountController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);

Route::group(
    [
        'prefix' => '/',
        'as' => 'front.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name('all');

        Route::get('/create', [\App\Http\Controllers\FrontController::class, 'create'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\FrontController::class, 'edit'])->name('edit');

        Route::post('/', [\App\Http\Controllers\FrontController::class, 'store'])->name('store');

        Route::post('/email', [\App\Http\Controllers\FrontController::class, 'storeEmail'])->name('storeEmail');

        Route::put('/{id}', [\App\Http\Controllers\FrontController::class, 'update'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\FrontController::class, 'destroy'])->name('destroy');
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
        'prefix' => 'emaillist',
        'as' => 'emaillist.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\EmailListController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\EmailListController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\EmailListController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\EmailListController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\EmailListController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\EmailListController::class, 'destroy'])
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
        'prefix' => 'reservation',
        'as' => 'reservation.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\ReservationController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\ReservationController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\ReservationController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\ReservationController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\ReservationController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\ReservationController::class, 'destroy'])
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

Route::group(
    [
        'prefix' => 'team',
        'as' => 'team.'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\TeamController::class, 'index'])
            ->middleware(['auth'])->name('all');

        Route::get('/create', [\App\Http\Controllers\TeamController::class, 'create'])
            ->middleware(['auth'])->name('create');

        Route::get('/{id}/edit', [\App\Http\Controllers\TeamController::class, 'edit'])
            ->middleware(['auth'])->name('edit');

        Route::post('/', [\App\Http\Controllers\TeamController::class, 'store'])
            ->middleware(['auth'])->name('store');

        Route::put('/{id}', [\App\Http\Controllers\TeamController::class, 'update'])
            ->middleware(['auth'])->name('update');

        Route::get('/{id}/delete', [\App\Http\Controllers\TeamController::class, 'destroy'])
            ->middleware(['auth'])->name('destroy');
    }
);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route for automatic deploys from Github.
Route::post('deploy', 'App\Http\Controllers\DeployController@deploy');

require __DIR__ . '/auth.php';
