<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSignalRequest extends FormRequest
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
            'description' => 'required',
            // 'user_id' => 'required|exists:users,id',
            'temoignage_id' => 'required|exists:temoignages,id',
            // 'supprimer_par_id' => 'nullable|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'La description est obligatoire.',
            'user_id.required' => 'L\'utilisateur est obligatoire.',
            'user_id.exists' => 'L\'utilisateur sélectionné est invalide.',
            'temoignage_id.required' => 'Le témoignage est obligatoire.',
            'temoignage_id.exists' => 'Le témoignage sélectionné est invalide.',
            'supprimer_par_id.exists' => 'L\'utilisateur sélectionné pour la suppression est invalide.',
        ];
    }
}
