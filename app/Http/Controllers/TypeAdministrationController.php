<?php

namespace App\Http\Controllers;

use App\Models\TypeAdministration;
use App\Http\Requests\StoreTypeAdministrationRequest;
use App\Http\Requests\UpdateTypeAdministrationRequest;

class TypeAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeAdministrations = typeAdministration::all();
        return view('typeAdministrations.index', compact('typeAdministrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return create('typeAdministration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeAdministrationRequest $request)
    {
        //
    }

    public function show(TypeAdministration $typeAdministration)
    {
        return show('typeAdministration.show');
    }


    public function edit(TypeAdministration $typeAdministration)
    {
        return edit('typeAdministration.edit');
    }

    public function update(UpdateTypeAdministrationRequest $request, TypeAdministration $typeAdministration)
    {
        return update('typeAdministration.update');
    }


    public function destroy(TypeAdministration $typeAdministration)
    {
        return destroy('typeAdministration.delete');
    }
}
