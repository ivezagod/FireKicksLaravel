<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/women',function(){
        return view('women',[
            'sneakers'=>\App\Models\Product::with('brand')->get()
        ]);
    })->name("women");

    Route::get('/kids',function(){
        return view('kids',[
            'sneakers'=>\App\Models\Product::with('brand')->get()
        ]);
    })->name("kids");
    Route::resource('/products',ProductController::class);
    Route::post('orders',[\App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
    Route::get('carts',[OrderController::class,'show'])->name('carts.show');
    Route::delete('carts.delete',[OrderController::class,'destroy'])->name('carts.destroy');
    Route::delete('orders.delete',[OrderController::class,'removeFromeCart'])->name('orders.destroy');
});

require __DIR__.'/auth.php';
