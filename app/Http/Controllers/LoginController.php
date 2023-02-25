<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function registerUser()
    {
        return view('login.register');
    }

    public function registerUserStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('loginUser');
    }

    public function loginUser()
    {
        return view('login.login');
    }

    public function loginUserStore(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->with('erorr', 'Wrong email or password!');
    }

    //google
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        try {
            $user = Socialite::driver($provider)->stateless()->user();
        } catch(Exception $e){
            return redirect()->back();
        }

        $authUser = $this->findOrCreateUser($user,$provider);

        return redirect('/home');
    }

    public function findOrCreateUser($socialUser, $provider){
        $socialAccount = User::where('social_id', $socialUser->getId())
       
        ->first();

        if($socialAccount){
            Auth()->login($socialAccount, true);
        } else {
            $user = User::where('email', $socialUser->getEmail())->first();

            if($user){
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'social_id' => $socialUser->getId(),
                    'social_type' => $provider,
                ]);
            }

            return $user;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
