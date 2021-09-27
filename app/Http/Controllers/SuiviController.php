<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuiviController extends Controller
{
    public function index()
    {

        $four_sec = Fournisseur::Where('section_id',Auth::user()->id)->count();

        $deleg_sec = Fournisseur::Where('section_id',Auth::user()->id)
                                ->Where('type','delegue')
                                ->count();
                                
        $plant_sec = Fournisseur::Where('section_id',Auth::user()->id)
                                ->Where('type','paysan')
                                ->count();
        

        return view('fournisseurs.suivi', compact('four_sec','deleg_sec','plant_sec'));
    }

    public function search(Request $request)
    {

        $four_sec = Fournisseur::Where('section_id',Auth::user()->id)->count();

        $deleg_sec = Fournisseur::Where('section_id',Auth::user()->id)
                                ->Where('type','delegue')
                                ->count();
                                
        $plant_sec = Fournisseur::Where('section_id',Auth::user()->id)
                                ->Where('type','paysan')
                                ->count();
        
        
        $key = trim($request->get('tf'));
        
        $fournisseurs = Fournisseur::query()
        ->where('type', 'like', "%{$key}%")
        ->Where('section_id',Auth::user()->id)
        ->orderBy('created_at', 'desc')
        ->get();
        
        //dd($fournisseurs);

        /*$categories = Category::all();

        $tags = Tag::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();*/

        return view('fournisseurs.suivi', [
            'key' => $key,
            'fournisseurs' => $fournisseurs,
            'four_sec' => $four_sec,
            'deleg_sec' => $deleg_sec,
            'plant_sec' => $plant_sec,
        ]);
    }

}
