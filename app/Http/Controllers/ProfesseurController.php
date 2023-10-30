<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfesseurRequest;
use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.professeur.index', [
            'professeurs'=> Professeur::orderBy('created_at','desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.professeur.form', [
            'professeur'=> new Professeur()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProfesseurRequest $request)
    {
        $professeur = Professeur::create($request->validated());
        return to_route('admin.professeur.index')->with('sucess', 'Le professeur a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        return view('admin.professeur.form', [
            'professeur'=>$professeur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProfesseurRequest $request, Professeur $professeur)
    {
        $professeur->update($request->validated());
        return to_route('admin.professeur.index')->with('sucess','Le professeur a ete bien modifie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        $professeur->delete();
        return to_route('admin.professeur.index')->with('sucess','Le professeur a ete bien supprime');
    }
}
