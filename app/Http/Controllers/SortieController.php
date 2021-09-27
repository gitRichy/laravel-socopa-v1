<?php

namespace App\Http\Controllers;

use App\Models\Sortie;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SortieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Auth::user()->section()->first();
        
        $partenaires = Partenaire::all();

        $sorties = Auth::user()->section->sorties()->get();

        return view('stocks.sortie.index', compact('section','partenaires','sorties'));
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
        $sortie = $request->validate([
            'num_connaiss' => ['required','string','unique:sorties'],
            'poids_brute' => ['required','integer'],
            'nbre_sacs' => ['required','integer'],
            'poids_net' => ['required','integer'],
            'prix_unit' => ['required','integer'],
            'nature_produit' => ['required','string'],
            'partenaire_id' => ['required','integer'],
            'section_id' => ['required','integer'],
        ]);

        Sortie::create($sortie);
        
        return back()->with('success', 'Sortie bien crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function show(Sortie $sortie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function edit(Sortie $sortie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sortie $sortie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sortie  $sortie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sortie $sortie)
    {
        $sortie->delete();

        return back()->with('success','Entrée bien supprimer');
    }
}
