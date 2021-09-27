<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_achat',
        'num_pesage',
        'poids_brute',
        'nbre_sacs',
        'poids_net',
        'prix_unit',
        'total_achat',
        'fournisseur_id',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
