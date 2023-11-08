<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        // $user = new User();
        // $user->email = $request->get('email');
        // $user->firstname = $request->get('firstname');
        // $user->lastname = $request->get('lastname');
        // $user->password = bcrypt($request->get('password'));
        // $user->save();

        // return response()->json($user);

    $validatedData = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        ]);

    $user = User::create([
        'firstname' => $validatedData['firstname'],
        'lastname' => $validatedData['lastname'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        ]);

    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
        ]);
    }


    public function login(Request $request){

    if (!Auth::attempt($request->only('email', 'password'))) {
    return response()->json(['message' => 'Invalid login details'], 401);
    }

    $user = User::where('email', $request['email'])->firstOrFail();

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
        ]);
    }

    public function me(Request $request){
        return $request->user();
    }
}


