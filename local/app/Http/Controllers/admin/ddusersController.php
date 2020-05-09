<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usersDD;
use Illuminate\Support\Facades\Session;
use App\Providers\SweetAlertServiceProvider;

class ddusersController extends Controller
{
    public function index(){
        //
    }

    public function login(Request $request) {
        if(Session::get('login')){
            return redirect('admin/dashboard');
        } else {
            $request->flash();
            return view('remote.login');
        }
    }
    
    public function loginPost(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $request->flash();

        $dataDDusers = usersDD::where('name',$username)->first();
        $dataDDpassword = usersDD::where('password', $password)->first();
      
        if ($username !== null) {
            if ($password !== null) {
                if ($dataDDusers) {
                    if ($dataDDpassword) {
                        Session::put('name', $dataDDusers->name);
                        Session::put('login',TRUE);
                        return redirect('admin/dashboard');
                    } else {
                        session::put('error-login', 'Password salah bray!!');
                        session::put('username', $username);
                        return redirect('admin');
                    }
                } else {
                    session::put('error-login', 'Username tidak ada bray!!');
                    session::put('username', $username);
                    return redirect('admin');
                }
            } else {
                session::put('error-login', 'Isi terlebih dahulu password anda...');
                session::put('username', $username);
                return redirect('admin');
            }
        } else {
            session::put('error-login', 'Isi terlebih dahulu username anda...');
            return redirect('admin');
        }
       
    }

    public function logout(){
        Session::put('success-logout', 'Logout berhasil');
        Session::forget('login');
        Session::forget('name');
        Session::save();
        return redirect('admin');
    }
}
