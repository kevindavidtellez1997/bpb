<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create(){
        
        return view('auth.login');
    }
    
    public function store(Request $request)
    {


        $httpClient = 'https://bpbtraining-backend-api.herokuapp.com/generate-token';

        $response = HTTP::post($httpClient,
        [
            'username' => 'obed.navarrete',
            'password' => '1234'
        ]);

        return json_decode($response->getBody()->getContents());

        // $token = ('https://bpbtraining-backend-api.herokuapp.com/generate-token');
        
        // return $response;

        // $credentials = request(['username', 'password']);

        // if (! $token = auth()->attempt($credentials)) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        // return $this->respondWithToken($token);
        // $endpoint = HTTP::post('https://bpbtraining-backend-api.herokuapp.com/generate-token ');

        //$credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->to('/');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function destroy(){
        //auth()->logout();
        return view('logout');
        // return redirect()->to('/');
        
    }
}
