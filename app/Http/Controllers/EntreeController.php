<?php

namespace App\Http\Controllers;

use App\Models\Entree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Auth::user()->section()->first();
        
        $fournisseurs = Auth::user()->section->fournisseurs()->get();

        $entrees = Auth::user()->section->entrees()->get();

        //dd($entrees);

        return view('stocks.entree.index', compact('fournisseurs','section','entrees'));
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
        $entree = $request->validate([
            'num_pesage' => ['required','string','unique:entrees'],
            'poids_brute' => ['required','integer'],
            'nbre_sacs' => ['required','integer'],
            'poids_net' => ['required','integer'],
            'prix_unit' => ['required','integer'],
            'nature_produit' => ['required','string'],
            'fournisseur_id' => ['required','integer'],
            'section_id' => ['required','integer'],
        ]);

        Entree::create($entree);
        
        return back()->with('success', 'Entrée bien crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function show(Entree $entree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function edit(Entree $entree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entree $entree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entree  $entree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entree $entree)
    {
        $entree->delete();

        return back()->with('success','Entrée bien supprimer');
    }
}
