<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    //

    public function login(Request $request){
        $credentials = (['name' => $request->name, 'password' => $request->password]);

        // if(!Auth::attempt($credentials)){
        //     return redirect()->back()->withErrors(new MessageBag(['your username or password is incorrect']));
        // }

        // if($request->remember_me){
        //     Cookie::queue('username', $request->name);
        //     Cookie::queue('password', $request->password);
        // }
        // else{
        //     Cookie::queue(Cookie::forget('username'));
        //     Cookie::queue(Cookie::forget('password'));
        // }
        // Session::put('mySession', 'This is my session');

        //remember with token
        if(!Auth::attempt($credentials, $request->remember_me)){
            return redirect()->back()->withErrors(new MessageBag(['your username or password is incorrect']));
        }

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }
}

