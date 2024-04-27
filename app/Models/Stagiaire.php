<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'filiere_id'
    ];

    public function filiere() {
        return $this->belongsTo(Filiere::class);
    }
}
