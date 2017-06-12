<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct(){
        //$this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){

        if ( auth()->attempt(request(['email','password']))){
            return redirect('/admin');
        }

        return back()->withErrors([
            'message' => 'Вы ввели неверный логин или пароль, попробуйте еще раз'
        ]);
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
