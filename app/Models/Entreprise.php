<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function expenriences() {
        return $this->belongsToMany(Experience::class);
    }
}
