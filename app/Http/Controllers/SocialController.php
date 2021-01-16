<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class SocialController extends Controller
{
     public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/home');
            }
    }
     public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle()
    {
    
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
                
    
                Auth::login($createUser);
                return redirect('/home');
            }
    }

}
