<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Partie SignUp :

    public function register(RequestCreateUser $request) {

    $user = new User($request -> all());
    $user->save();

    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json([
        'id' => $user['id'],
        'firstname' => $user['firstname'],
        'lastname' => $user['lastname'],
        'email' => $user['email'],
        'access_token' => $token,
        'token_type' => 'Bearer',
        ]);

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
        'id' => $user['id'],
        'firstname' => $user['firstname'],
        'lastname' => $user['lastname'],
        'email' => $user['email'],
        'access_token' => $token,
        'token_type' => 'Bearer',
        ]);
    }

    public function me(Request $request){
        return $request->user();
    }


    public function destroy (string $id, User $user) {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Utilisateur supprimé avec succès']);
    }
}


