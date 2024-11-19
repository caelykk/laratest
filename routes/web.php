<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
	return view('home');
});
Route::get('/delivery-payment', function () {
	return view('delivery-payment/delivery');
});

Route::get('/address', function () {
	return view('address/address');
});
Route::get('/delayed', function () {
	return view('delayed/delayed');
});

Route::get('/personal', function () {
	return view('personal/cabinet');
});

Route::get('/cart', function () {
	return view('cart/cart');
});

Route::get('/catalog', function () {
	return view('catalog/catalog');
});

Route::get('/authors', function () {
	return view('authors/authors');
});

Route::get('/new', function () {
	return view('new/new');
});

Route::get('/sale', function () {
	return view('sale/sale');
});

Route::get('/partners', function () {
	return view('partners/partners');
});

Route::get('/about', function () {
	return view('about/about');
});