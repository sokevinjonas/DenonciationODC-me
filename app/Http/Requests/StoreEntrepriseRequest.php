<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepriseRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'temoignage_id' => 'required|exists:temoignages,id',
            'type_administration_id' => 'required|exists:type_administrations,id',
            'secteur_activites_id' => 'required|exists:secteur_activites,id',
            // 'moderateur_id' => 'nullable|exists:users,id',
            // 'supprimer_par_id' => 'nullable|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'temoignage_id.required' => 'Le témoignage est obligatoire.',
            'temoignage_id.exists' => 'Le témoignage sélectionné est invalide.',
            'type_administration_id.required' => 'Le type d\'administration est obligatoire.',
            'type_administration_id.exists' => 'Le type d\'administration sélectionné est invalide.',
            'secteur_activites_id.required' => 'Le secteur d\'activités est obligatoire.',
            'secteur_activites_id.exists' => 'Le secteur d\'activités sélectionné est invalide.',
            'moderateur_id.exists' => 'Le modérateur sélectionné est invalide.',
            'supprimer_par_id.exists' => 'L\'utilisateur de suppression sélectionné est invalide.',
        ];
    }
}
