<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTemoignageRequest extends FormRequest
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
        // dd($this->all());
        return [
            'contenu' => 'nullable|string',
            'retro_action' => 'nullable|string',
            'like' => 'nullable|integer|min:0',
            'dislike' => 'nullable|integer|min:0',
            'partage' => 'nullable|integer|min:0',
            'lien_preuve' => 'nullable|nullable|string',
            'type_preuve' => 'nullable|in:audio,video,image',
            'moderateur_retro_action_id' => 'nullable|exists:users,id',
            // 'user_id' => 'required|exists:users,id',
            // 'supprimer_par_id' => 'nullable|exists:users,id',
            'preuve' => 'nullable|file|mimes:jpeg,png,jpg,mp3,wav,mp4,avi,mkv|max:20480',
        ];
    }
    public function messages(): array
    {
        return [
            'like.integer' => 'Le nombre de likes doit être un entier.',
            'dislike.integer' => 'Le nombre de dislikes doit être un entier.',
            'partage.integer' => 'Le nombre de partages doit être un entier.',
            // 'user_id.required' => "L'ID de l'utilisateur est requis.",
            // 'user_id.exists' => "L'utilisateur spécifié n'existe pas.",
            // 'moderateur_retro_action_id.exists' => 'Le modérateur spécifié n\'existe pas.',
            // 'supprimer_par_id.exists' => 'L\'utilisateur spécifié pour la suppression n\'existe pas.',
            // 'type_preuve.in' => 'Le type de preuve doit être audio, video ou image.',
            'preuve.mimes' => 'Le fichier doit être un type valide : jpeg, png, jpg, gif, svg, mp3, wav, mp4, avi, mkv.',
            'preuve.max' => 'Le fichier ne doit pas dépasser 20 MB.',
        ];
    }
}