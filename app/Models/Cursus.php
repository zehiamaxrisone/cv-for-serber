<?php

namespace App\Models;

use App\Models\Personne;
use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cursus extends Model
{
    use HasFactory;

    protected $fillable = ['debut', 'fin', 'diplome', 'niveau'];

    public function personnes() {
        return $this->belongsToMany(Personne::class);
    }

    public function etablissements() {
        return $this->belongsToMany(Etablissement::class);
    }
}
