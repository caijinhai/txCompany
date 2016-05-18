<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Krpano_photo;

class IndexController extends Controller
{

	public function index() {
		return view('index/index');
	}
	public function photo()
	{
		$krpano_photos = Krpano_photo::get();
		return view('index/photo',compact('krpano_photos'));
	}
	public function screen() {
		return view('index/screen');
	}
	public function about() {
		return view('index/about');
	}
	public function product() {
		return view('index/product');
	}
	public function concat() {
		return view('index/concat');
	}
	public function news() {
		return view('index/news');
	}
}
