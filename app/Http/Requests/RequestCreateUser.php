<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|confirmed|unique:users',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            // regex signifie que le mot de passe contient au moins une lettre majuscule ((?=.*?[A-Z])), une lettre minuscule ((?=.*?[a-z])), un chiffre ((?=.*?[0-9])), et un caractère spécial parmi ceux mentionnés ((?=.*?[#?!@$%^&*-])). La partie .{8,} garantit que la longueur totale du mot de passe est d'au moins 8 caractères
        ];
    }
}
