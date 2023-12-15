<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('google_id', $user->getId())->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'userName' => $user->getEmail(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('123123')
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
