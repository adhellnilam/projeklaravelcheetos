<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('loginAdmin');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with('erorr', 'Wrong email or password!');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('loginAdmin');
    }
}
