<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/delivery-payment', [MainController::class, 'delivery_payment'])->name('delivery-payment');
Route::get('/address', [MainController::class, 'address'])->name('address');
Route::get('/delayed', [MainController::class, 'delayed'])->name('delayed');
Route::get('/personal', [MainController::class, 'personal'])->name('personal');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/authors', [MainController::class, 'authors'])->name('authors');
Route::get('/new', [MainController::class, 'new'])->name('new');
Route::get('/sale', [MainController::class, 'sale'])->name('sale');
Route::get('/partners', [MainController::class, 'partners'])->name('partners');
Route::get('/about', [MainController::class, 'about'])->name('about');