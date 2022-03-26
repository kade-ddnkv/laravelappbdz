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

Route::get('/dashboard', function () {
    return 'Добро пожаловать, Админ';
})->middleware('role:administrator');

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/', function () {
    return view('welkommen.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products/all_products_cards', [\App\Http\Controllers\ProductController::class, 'getAllProductsCards'])
    ->name('products.cards');
Route::resource('products', \App\Http\Controllers\ProductController::class);

//Route::resource('categories', \App\Http\Controllers\CategoryController::class)
//    ->middleware('role:administrator');
Route::get('/categories/breadcrumbs', [\App\Http\Controllers\CategoryController::class, 'getBreadcrumbs'])
    ->name('categories.breadcrumbs');

//Route::resource('orders', \App\Http\Controllers\OrderController::class);

Route::get('/orders/index', [\App\Http\Controllers\OrderController::class, 'index'])
    ->name('orders.index')
    ->middleware('role:customer');
Route::get('/orders/create', [\App\Http\Controllers\OrderController::class, 'create'])
    ->name('orders.create')
    ->middleware('role:customer');
Route::get('/orders/{order}/show', [\App\Http\Controllers\OrderController::class, 'show'])
    ->name('orders.show')
    ->middleware('role:customer|administrator');
Route::get('/orders/indexAll', [\App\Http\Controllers\OrderController::class, 'indexAll'])
    ->name('orders.indexAll')
    ->middleware('role:administrator');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('role:administrator');

Route::get('/basket/index', [\App\Http\Controllers\BasketController::class, 'index'])
    ->name('basket.index')
    ->middleware('role:customer');
Route::get('/basket/checkout', [\App\Http\Controllers\BasketController::class, 'checkout'])
    ->name('basket.checkout')
    ->middleware('role:customer');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basket.add')
    ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])
    ->middleware('role:customer');
