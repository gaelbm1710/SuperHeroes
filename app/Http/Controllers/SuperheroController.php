<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superhero::all();
        return view("superheroes.index", compact("superheroes"));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("superheroes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'real_name'=>'required',
            'superhero_name'=>'required',
            'photo_url'=>'required',
            'additional'=>'nullable',
        ]);
        Superhero::create($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Registered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name'=>'required',
            'superhero_name'=>'required',
            'photo_url'=>'required',
            'additional'=>'nullable',
        ]);
        $superhero->update($request->all());
        return redirect()->route('superheroes.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success','Deleted successfully');
    }
}
