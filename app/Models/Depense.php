<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function Annee() {
        return $this->belongsTo(Annee::class, 'annees_id');
    }
}
