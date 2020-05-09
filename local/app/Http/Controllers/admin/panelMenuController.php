<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usersDD;
use Illuminate\Support\Facades\Session;

class panelMenuController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return abort(404);
        } else {
            return view('remote.menu.home');
        }
    }

    public function news(){
        if(!Session::get('login')){
            return abort(404);
        } else {
            return view('remote.menu.news');
        }
    }

    public function donate(){
        if(!Session::get('login')){
            return abort(404);
        } else {
            return view('remote.menu.donate');
        }
    }

    public function msg(){
        if(!Session::get('login')){
            return abort(404);
        } else {
            return view('remote.menu.message');
        }
    }
}
