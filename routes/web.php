<?php

use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Base\TeamController;
use App\Http\Controllers\Home\DashboardController;
use App\Http\Controllers\Home\WelcomeController;
use App\Models\Base\Team;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/nosotros', [WelcomeController::class, 'about'])->name('about');
Route::get('/propiedades', [WelcomeController::class, 'propiedades'])->name('propiedades');
Route::get('/contacto', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/propiedades/{propiedad}', [WelcomeController::class, 'propiedad'])->name('propiedad');

Route::middleware([
    // 'auth:sanctum',
    // config('jetstream.auth_session'),
    // 'verified',
    'auth', 'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/properties',[PropertyController::class, 'index'])->name('property.index');
    Route::get('/properties/create',[PropertyController::class, 'create'])->name('property.create');
    Route::get('/properties/{property}',[PropertyController::class, 'show'])->name('property.show');
    Route::get('/properties/{property}/edit',[PropertyController::class, 'edit'])->name('property.edit');

    Route::get('/sellers',[SellerController::class, 'index'])->name('seller.index');
    Route::get('/sellers/create',[SellerController::class, 'create'])->name('seller.create');
    Route::get('/sellers/{seller}',[SellerController::class, 'show'])->name('seller.show');
    Route::get('/sellers/{seller}/edit',[SellerController::class, 'edit'])->name('seller.edit');

    Route::get('/teams',[TeamController::class, 'index'])->name('team.index');
});

