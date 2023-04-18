<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $token = $user->createToken('user_token')->plainTextToken;
        return to_route('home');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', '=', $request->email)->first();
            $token = $user->createToken('user_token')->plainTextToken;
            $request->headers->set('Authorization', "Bearer $token");
            $tokenCookie = $this->tokenCookie($token);
            return redirect()->intended()->withCookie($tokenCookie);
        } else {
            return back()->with('fail', 'Wrong password');
        }
    }

    public function tokenCookie($token)
    {
        return cookie('token', $token, 60 * 24);
    }

    public function logout(Request $request)
    {
        User::getByToken()->tokens()->delete();
        return redirect()->route('home');
    }
}
