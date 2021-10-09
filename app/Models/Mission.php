<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = ['debut', 'fin', 'nom', 'technologie'];

    public function experiences() {
        return $this->belongsToMany(Experience::class);
    }
}
