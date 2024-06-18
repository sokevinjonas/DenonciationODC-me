<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecteurActivite;
use App\Http\Requests\SecteurActiviteRequest;
use App\Http\Requests\StoreSecteurActiviteRequest;
use App\Http\Requests\UpdateSecteurActiviteRequest;

class SecteurActiviteController extends Controller
{
    public function index()
    {
        $secteurActivites = SecteurActivite::all();
        return view('secteurActivites.index', compact('secteurActivites'));
    }

    public function create()
    {
        return view('secteurActivites.create');
    }

    public function store(StoreSecteurActiviteRequest $request)
    {
        $data = $request->validated();
        $data['moderateur_id'] = auth()->user()->id;
        SecteurActivite::create($data);
        return redirect()->route('secteurActivites.index')->with('success', 'Secteur d\'activité créé avec succès.');
    }

    public function show(SecteurActivite $secteurActivite)
    {
        return view('secteurActivites.show', compact('secteurActivite'));
    }

    public function edit(SecteurActivite $secteurActivite)
    {
        return view('secteurActivites.edit', compact('secteurActivite'));
    }

    public function update(UpdateSecteurActiviteRequest $request, SecteurActivite $secteurActivite)
    {
        $secteurActivite->update($request->validated());
        return redirect()->route('secteurActivites.index')->with('success', 'Secteur d\'activité mis à jour avec succès.');
    }

    public function destroy(SecteurActivite $secteurActivite)
    {
        $secteurActivite->delete();
        return redirect()->route('secteurActivites.index')->with('success', 'Secteur d\'activité supprimé avec succès.');
    }
}
