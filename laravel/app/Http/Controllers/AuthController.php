<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Partie SignUp :

    public function register(Request $request) {
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

    // return redirect()->route('auth/login');
    }

    // Partie CONNEXION :

    public function login(Request $request){

    if (!Auth::attempt($request->only('email', 'password'))) {
    return response()->json(['message' => 'Mot de passe ou email non valide'], 401);
    }

    // if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
    //     return response()->json(['message' => 'Connexion reussie']);
    // }

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

    // Partie DECONNEXION :

    // public function logout(Request $request){
    //     $request->user()->tokens()->delete();
    //     return response()->json(['message' => 'Deconnexion reussie']);
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route('login');
    // }

    public function destroy (string $id, User $user) {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Utilisateur supprimé avec succès']);
    }
}


