<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use App\Http\Requests\StoreTemoignageRequest;
use App\Http\Requests\UpdateTemoignageRequest;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoignages = Temoignage::latest("created_at")->get();
        return view('temoignages.index', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temoignages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemoignageRequest $request)
    {   
        // Valider et obtenir les données du formulaire
        $data = $request->validated();

         // Vérifier s'il y a un fichier de preuve et le traiter
        if ($request->hasFile('preuve')) {
            $file = $request->file('preuve');
            $typePreuve = $data['type_preuve'];

            // Déterminer le dossier de destination en fonction du type de preuve
            $folder = $this->getFolderName($typePreuve);

            // Déplacer le fichier vers le dossier approprié
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs($folder, $fileName);

            // Enregistrer le chemin du fichier dans les données validées
            $validatedData['lien_preuve'] = $filePath;
        }

        // Assigner l'ID de l'utilisateur actuel (à adapter selon votre logique d'authentification)
        $user_id = 1; // Assurez-vous d'adapter cette ligne à votre logique d'authentification
        $data['user_id'] = $user_id;

        $temoignage = Temoignage::create($data);

        // Vérifier si la création a réussi
        if ($temoignage) {
            echo "Success";
            // return redirect()->route('temoignages.index')->with('success', 'Témoignage créé avec succès.');
        } else {
            echo "Error";
            // return back()->withInput()->with('error', 'Une erreur est survenue lors de la création du témoignage.');
        }
    }

    private function getFolderName($typePreuve)
    {
        switch ($typePreuve) {
            case 'audio':
                return 'audio';
            case 'video':
                return 'video';
            case 'image':
                return 'image';
            default:
                return 'other';
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Temoignage $temoignage)
    {
        return view('temoignages.show', compact('temoignage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Temoignage $temoignage)
    {
        return view('temoignages.edit', compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemoignageRequest $request, Temoignage $temoignage)
    {
        $temoignage->update($request->validated());
        return redirect()->route('temoignages.index')->with('success', 'Temoignage mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Temoignage $temoignage)
    {
        $temoignage->delete();
        return redirect()->route('temoignages.index')->with('success', 'Temoignage supprimé avec succès.');
    }
}