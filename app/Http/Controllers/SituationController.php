<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SituationController extends Controller
{
    public function index()
    {
        $pds_brute_entree = Auth::user()->section->entrees()->sum('poids_brute');
        $nbre_sacs_entree = Auth::user()->section->entrees()->sum('nbre_sacs');
        $pds_net_entree = Auth::user()->section->entrees()->sum('poids_net');

        $pds_brute_sortie = Auth::user()->section->sorties()->sum('poids_brute');
        $nbre_sacs_sortie = Auth::user()->section->sorties()->sum('nbre_sacs');
        $pds_net_sortie = Auth::user()->section->sorties()->sum('poids_net');

        $pds_brute_stock = $pds_brute_entree - $pds_brute_sortie;
        $nbre_sacs_stock = $nbre_sacs_entree - $nbre_sacs_sortie;
        $pds_net_stock = $pds_net_entree - $pds_net_sortie;

        return view('stocks.index', compact('pds_brute_stock','nbre_sacs_stock','pds_net_stock'));
    }
}
