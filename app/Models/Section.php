<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'libelle',
        'user_id'
    ];

    /**
     * Get the zone that owns the section.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fournisseurs()
    {
        return $this->hasMany(Fournisseur::class);
    }

    public function entrees()
    {
        return $this->hasMany(Entree::class);
    }

    public function sorties()
    {
        return $this->hasMany(Sortie::class);
    }
}
