<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Cotisation() {
        return $this->hasMany(Cotisation::class);
    }

    function Depense() {
        return $this->hasMany(Depense::class);
    }
}
