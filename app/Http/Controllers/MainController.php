<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
	public function index()
	{
		return view('home');
	}
	public function delivery_payment()
	{
		return view('Delivery-Payment/delivery');
	}
	public function address()
	{
		return view('Address/address');
	}
	public function delayed()
	{
		return view('Delayed/delayed');
	}
	public function personal()
	{
		return view('Personal/cabinet');
	}

	public function cart()
	{
		return view('Cart/cart');
	}
	public function catalog()
	{
		return view('Catalog/catalog');
	}
	public function authors()
	{
		return view('Authors/authors');
	}

	public function new()
	{
		return view('New/new');
	}

	public function sale()
	{
		return view('Sale/sale');
	}

	public function partners()
	{
		return view('Partners/partners');
	}

	public function about()
	{
		return view('About/about');
	}

}
