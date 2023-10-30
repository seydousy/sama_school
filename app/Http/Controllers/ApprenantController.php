<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CreateApprenantRequest;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.apprenant.index', [
            'apprenants'=> Apprenant::orderBy('created_at','desc')->paginate(25)
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.apprenant.form', [
            'apprenant'=> new Apprenant()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateApprenantRequest $request)
    {
        $apprenant = Apprenant::create($request->validated());
        return to_route('admin.apprenant.index')->with('sucess', 'L\'apprenant a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apprenant $apprenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprenant $apprenant)
    {
        return view('admin.apprenant.form', [
            'apprenant'=>$apprenant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateApprenantRequest $request, Apprenant $apprenant)
    {
        $apprenant->update($request->validated());
        return to_route('admin.apprenant.index')->with('sucess','L\'apprenant a ete bien modifie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprenant $apprenant)
    {
        $apprenant->delete();
        return to_route('admin.apprenant.index')->with('sucess','L\'apprenant a ete bien supprime');
    }
}
