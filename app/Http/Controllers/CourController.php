<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CreateCourRequest;
use App\Models\Cour;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cour.index', [
            'cours'=> Cour::orderBy('created_at','desc')->paginate(25)
        ]);
    }
    public function indexForindex()
{
    return view('dashboard', [
        'cours'=> Cour::orderBy('created_at','desc')->paginate(25)
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cour.form', [
            'cour'=> new Cour()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourRequest $request)
    {
        $cour = Cour::create($request->validated());
        return to_route('admin.cour.index')->with('sucess', 'Le cour a ete cree avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cour $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cour $cour)
    {
        return view('admin.cour.form', [
            'cour'=>$cour
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCourRequest $request, Cour $cour)
    {
        $cour->update($request->validated());
        return to_route('admin.cour.index')->with('sucess','Le cour a ete bien modifie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cour $cour)
    {
        $cour->delete();
        return to_route('admin.cour.index')->with('sucess','Le cour a ete bien supprime');
    }
}
