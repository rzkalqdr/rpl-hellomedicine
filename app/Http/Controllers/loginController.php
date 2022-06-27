<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    // Fungsi untuk masuk ke login
    public function index(){
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // Fungsi untuk masuk ke Dashboard admin
    public function indexDashboard(){
        return view('dashboardAdmin.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }


    // Fungsi untuk autentikasi login
    public function authenticate(Request $request){
        $credentials = $request->validate([
           'username' => 'required',
           'password' => 'required' 
        ]);

        // cek apakah username dan password sudah diisi
        if(Auth::attempt($credentials)){
            // cek apakah user adalah admin atau tidak
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }else{
                // menghindari hacking
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        } else {
            return back()->with('loginError', 'Login failed!'); 
        }
    }

    // fungsi logout
    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
