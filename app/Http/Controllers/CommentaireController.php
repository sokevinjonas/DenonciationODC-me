<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = commentaire::all();
        return view('commentaires.index', compact('commentaires'));
    }


    public function create()
    {
        return view('commentaires.create');
    }


    public function store(StoreCommentaireRequest $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
        ]);
        commentaire::create($request->all());
        return redirect()->route('commentaires.index')->with('success', 'commentaire creer avec succes.');
    }


    public function show(Commentaire $commentaire)
    {
        return view('commentaires.show');
    }


    public function edit(Commentaire $commentaire)
    {
        return view('commentaires.edit', compact('commentaire'));
    }


    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
        ]);

    }

   
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->route('commentaires.index')->with('success', 'commentaire supprimé.');
    }
    }

