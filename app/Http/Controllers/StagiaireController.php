<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();

        return view('stagiaires.index', compact('stagiaires'));
    }

    public function create() {
        $filieres = Filiere::all();

        return view('stagiaires.create', compact('filieres'));
    }

    public function store(Request $request)
    {
        $validatedData = [
            'nom' => 'required|min:3|string',
            'prenom' => 'required|min:3|string',
            'date_naissance' => 'required|date|before:now',
            'filiere_id' => 'required'
        ];

        $request->validate($validatedData);

        Stagiaire::create($request->all());

        return redirect()->route('stagiaires.index');
    }

    public function edit($id)
    {
        $stagiaire = Stagiaire::find($id);
        $filieres = Filiere::all();

        return view('stagiaires.edit', compact("stagiaire","filieres"));
    }

    public function update(Request $request, $id)
    {
        $stagiaire = Stagiaire::find($id);

        $validatedData = [
            'nom' => 'required|min:3|string',
            'prenom' => 'required|min:3|string',
            'date_naissance' => 'required|date|before:now',
            'filiere_id' => 'required'
        ];

        $request->validate($validatedData);

        $stagiaire->update($request->all());

        return redirect()->route('stagiaires.index') ;
    }

    public function show($id)
    {
        $stagiaire = Stagiaire::find($id);

        return view('stagiaires.show', compact("stagiaire"));
    }

    public function destroy($id) {
        Stagiaire::find($id)->delete();

        return redirect()->route('stagiaires.index');
    }
}
