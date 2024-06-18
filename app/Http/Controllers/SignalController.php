<?php

namespace App\Http\Controllers;

use App\Models\Signal;
use Illuminate\Http\Request;

class SignalController extends Controller
{
    public function index()
    {
        $signals = Signal::all();
        return view('signals.index', compact('signals'));
    }

    public function create()
    {
        return view('signals.create');
    }

    public function store(Request $request)
    {
        $data  = $request->validate([
            'description' => 'required',
            // 'user_id' => 'required|exists:users,id',
            'temoignage_id' => 'required|exists:temoignages,id',
            // 'supprimer_par_id' => 'nullable|exists:users,id',
        ]);

        $data['user_id'] = auth()->user()->id;

        Signal::create($data);
        return redirect()->route('signals.index')->with('success', 'Signal créé avec succès.');
    }

    public function show(Signal $signal)
    {
        return view('signals.show', compact('signal'));
    }

    public function edit(Signal $signal)
    {
        return view('signals.edit', compact('signal'));
    }

    public function update(Request $request, Signal $signal)
    {
        $data  = $request->validate([
            'description' => 'required',
            // 'user_id' => 'required|exists:users,id',
            'temoignage_id' => 'required|exists:temoignages,id',
            // 'supprimer_par_id' => 'nullable|exists:users,id',
        ]);

        $signal->update($data);
        return redirect()->route('signals.index')->with('success', 'Signal mis à jour avec succès.');
    }

    public function destroy(Signal $signal)
    {
        $signal->delete();
        $signal->update([
            'supprimer_par_id' => auth()->user()->id
        ]);
        return redirect()->route('signals.index')->with('success', 'Signal supprimé avec succès.');
    }
}
