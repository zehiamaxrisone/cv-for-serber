<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'competence_id'];

    public function competence() {
        return $this->belongsTo(Competence::class);
    }
}
