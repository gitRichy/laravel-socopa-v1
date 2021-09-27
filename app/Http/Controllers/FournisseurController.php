<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $section = Auth::user()->section()->first();


        //$section = Section::where('user_id',Auth::user()->id)->get();


        return view('fournisseurs.index', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fournisseur = $request->validate([
            'code' => ['required','string','min:3','unique:fournisseurs'],
            'nom' => ['required','string','max:50'],
            'phone' => ['required','string','max:10'],
            'cni' => ['required','string'],
            'type' => ['required','string','max:10'],
            'section_id' => ['required','integer'],
        ]);

        Fournisseur::create($fournisseur);
        
        return back()->with('success', 'Fournisseur bien crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        $section = Auth::user()->section()->first();

        $fournisseurs = Auth::user()->section->fournisseurs()->get();

        return view('fournisseurs.edit', compact('fournisseurs','section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        $data = $request->validate([
            'code' => ['required','string','min:3','unique:fournisseurs'],
            'nom' => ['required','string','max:50'],
            'phone' => ['required','string','max:10'],
            'cni' => ['required','string'],
            'type' => ['required','string','max:10'],
            'section_id' => ['required','integer'],
        ]);

        $fournisseur->update($data);
        
        return redirect()->route('fournisseurs.index')->with('success', 'Fournisseur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();

        return back()->with('success','Fournisseur bien supprimer');
    }
}
