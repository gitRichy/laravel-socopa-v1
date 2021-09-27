<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avancement extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'montant',
        'fournisseur_id'
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
