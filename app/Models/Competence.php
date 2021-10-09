<?php

namespace App\Models;

use App\Models\Domaine;
use App\Models\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function personnes() {
        return $this->belongsToMany(Personne::class);
    }

    public function domaines() {
        return $this->hasMany(Domaine::class);
    }
}
