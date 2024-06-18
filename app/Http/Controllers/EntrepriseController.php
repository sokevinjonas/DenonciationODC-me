<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprises.index', compact('entreprises'));
    }

    public function create()
    {
        return view('entreprises.create');
    }

    public function store(StoreEntrepriseRequest $request)
    {
        $data = $request->validated();
        $data['moderateur_id'] = auth()->user()->id;
        Entreprise::create($data);
        return redirect()->route('entreprises.index')->with('success', 'Entreprise créée avec succès.');
    }

    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', compact('entreprise'));
    }

    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', compact('entreprise'));
    }

    public function update(UpdateUserRequest $request, Entreprise $entreprise)
    {
        $entreprise->update($request->validated());
        return redirect()->route('entreprises.index')->with('success', 'Entreprise mise à jour avec succès.');
    }

    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        $entreprise->update([
            'supprimer_par_id' => auth()->user()->id ?? 2
        ]);
        return redirect()->route('entreprises.index')->with('success', 'Entreprise supprimée avec succès.');
    }
}
