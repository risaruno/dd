<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\news;
use App\slider;

class webController extends Controller
{
	public function index() {

		$slider = slider::get();
		$news = news::get();

		return view('web.content.home',['news' => $news, 'slider' => $slider]);
	}

	public function news() {

		$news = news::get();

		return view('web.content.news',['news' => $news]);
	}

	public function program() {
		return view('web.content.program');
	}

	public function donate() {
		return view('web.content.donate');
	}

	public function contact() {
		return view('web.content.contact');
	}

	public function about() {
		return view('web.content.about');
	}

	public function thread($id) {
		$news = news::where('id', $id)->get();

		return view('web.content.thread', ['news' => $news]);
	}
}
