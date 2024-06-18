<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSecteurActiviteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'libelle' => 'required|string|max:255',
            // 'moderateur_id' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'libelle.required' => 'Le libellé est obligatoire.',
            'libelle.string' => 'Le libellé doit être une chaîne de caractères.',
            'libelle.max' => 'Le libellé ne doit pas dépasser 255 caractères.',
            'moderateur_id.required' => 'Le modérateur est obligatoire.',
            'moderateur_id.exists' => 'Le modérateur sélectionné est invalide.',
        ];
    }
}
