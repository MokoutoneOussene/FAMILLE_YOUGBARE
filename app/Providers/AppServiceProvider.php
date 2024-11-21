<?php

namespace App\Providers;

use App\Models\Bailleur;
use App\Models\ContratBailleur;
use App\Models\Cotisation;
use App\Models\Depense;
use App\Models\DepenseBailleur;
use App\Models\DepenseLocataire;
use App\Models\Encaissement;
use App\Models\Immeuble;
use App\Models\Locataire;
use App\Models\Location;
use App\Models\Maison;
use App\Models\Paiement;
use App\Models\Resiliation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::created(function ($users) {
            $users->update(['code' => 'Y.' . $users->prenom . $users->id . $users->date_naiss]);
            $users->update(['password' => Hash::make('1234')]);
        });

        Cotisation::created(function ($cotis) {
            $cotis->update(['total_cotisation' => $cotis->montant * $cotis->nbr_mois]);
        });
    }
}
