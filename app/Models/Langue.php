<?php

namespace App\Models;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Langue extends Model
{
    use HasFactory;

    protected $fillable = ['nomlangue', 'niveau'];

    public function personnes() {
        return $this->belongsToMany(Personne::class);
    }
}
