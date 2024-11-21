<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    function User() {
        return $this->belongsTo(User::class, 'users_id');
    }

    function Annee() {
        return $this->belongsTo(Annee::class, 'annees_id');
    }

    function Caisse()
    {
        return $this->hasOne(Caisse::class);
    }
}
