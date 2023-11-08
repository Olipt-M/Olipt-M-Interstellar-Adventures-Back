<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $user = new User();
        $user->email = $request->get('email');
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return response()->json($user);
    }

    public function registerForm(Request $request) {
        $registerForm = new User($request->all());
        $registerForm->save();

        return response()->json($registerForm);
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return true;
        } else {
            return false;
        }
    }
}
