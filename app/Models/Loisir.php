<?php

namespace App\Models;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loisir extends Model
{
    use HasFactory;

    protected $fillable = ['nomloisir'];

    public function personnes() {
        return $this->belongsToMany(Personne::class);
    }
}
