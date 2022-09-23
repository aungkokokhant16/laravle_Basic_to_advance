<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
       $formData = request()->validate([
            'name'=>'required|max:255|min:3',
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:8',
            'username'=>['required','max:255','min:3',Rule::unique('users','username')]
        ]);

        $user=User::create($formData);
        //login
        auth()->login($user);
        return redirect('/')->with('success','Welcome Dear, '.$user->name);

    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success','Good Bye');
    }

    public function login(){
        return view('auth.login');
    }

    public function post_login(){
        $formData=request()->validate([
            'email'=>['required','email','max:255',Rule::exists('users','email')],
            'password'=>['required','min:8','max:255']
        ],[
            'email.required'=>"We need your email." // validate text ကိုပြင်ခြင်ရင် ဒီလိုသုံးနိုင်
        ]);

        if(auth()->attempt($formData)){
            return redirect('/')->with('success','Welcome Back');
        }else{
            return redirect()->back()->withErrors([
                'email'=>'User Credentials Wrong'
            ]);
        }
    }
}
