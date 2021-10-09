<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Cursus;
use App\Models\Langue;
use App\Models\Loisir;
use App\Models\Competence;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'date2naiss', 'lieu2naiss', 'email', 'tel', 'infosup', 'password', 'username'];

    public function langues() {
        return $this->belongsToMany(Langue::class);
    }

    public function loisirs() {
        return $this->belongsToMany(Loisir::class);
    }

    public function cursuses() {
        return $this->belongsToMany(Cursus::class);
    }

    public function experiences() {
        return $this->belongsToMany(Experience::class);
    }

    public function competences() {
        return $this->belongsToMany(Competence::class);
    }

    public function image() {
        return $this->belongsTo(Image::class);
        //return $this->hasOne(Image::class);
    }

}
