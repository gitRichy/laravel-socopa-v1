<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'phone',
        'cni',
        'type',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function entrees()
    {
        return $this->hasMany(Entree::class);
    }

    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
}
