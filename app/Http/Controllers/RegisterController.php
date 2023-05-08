<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){

        return view('auth.register');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
             'name' => 'required|string|max:255',
             'email'=> 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6|confirmed',
        ]);
        
        $user = User::create(request(['name','email','password']));
        auth()->login($user);
        return redirect()->to('/');       
    }
}
