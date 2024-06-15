<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'nom' => 'sometimes|required|string|max:255',
            'prenom' => 'sometimes|required|string|max:255',
            'pseudo' => 'nullable|string|max:255',
            'telephone' => 'sometimes|required|string|max:20|unique:users,telephone,' . $this->user,
            'ref_cnib' => 'sometimes|required|string|max:50|unique:users,ref_cnib,' . $this->user,
            'role' => 'sometimes|in:moderateur,administrateur,utilisateur',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $this->user,
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'admin_id' => 'nullable|exists:users,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'telephone.required' => 'Le champ téléphone est obligatoire.',
            'telephone.unique' => 'Ce numéro de téléphone est déjà utilisé.',
            'ref_cnib.required' => 'Le champ référence CNIB est obligatoire.',
            'ref_cnib.unique' => 'Cette référence CNIB est déjà utilisée.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'Veuillez fournir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'admin_id.exists' => 'L\'admin spécifié n\'existe pas.',
            'role.required' => 'Le champ rôle est obligatoire.',
            'role.in' => 'Le rôle spécifié est invalide.',
        ];
    }
}
