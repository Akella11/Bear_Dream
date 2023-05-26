<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class register_controller extends Controller
{
    public function save(Request $request){
        
        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'password' => 'required'
            
        ]);

        if(User::where('email', $validateFields('email'))->exists()){
            return redirect(route('user.registration'))->withErrors([
                'formError' => 'Користувач з даною електронною поштою вже існує'
            ]);    
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Помилка при збереженні користувача'
        ]);
    }
}

