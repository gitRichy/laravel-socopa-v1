<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_sortie',
        'num_connaiss',
        'poids_brute',
        'nbre_sacs',
        'poids_net',
        'prix_unit',
        'nature_produit',
        'partenaire_id',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }
}
