<?php

namespace App\Models;

use App\Models\Mission;
use App\Models\Personne;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['debut', 'fin', 'poste', 'detail'];

    public function personnes() {
        return $this->belongsToMany(Personne::class);
    }

    public function missions() {
        return $this->belongsToMany(Mission::class);
    }

    public function entreprises() {
        return $this->belongsToMany(Entreprise::class);
    }
}
