<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('annees')->insert([
            'libelle' => '2024',
            'statut' => 'Ouverte',
        ]);

        DB::table('annees')->insert([
            'libelle' => '2025',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2026',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2027',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2028',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2029',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2030',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2031',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2032',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2033',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2034',
            'statut' => 'Fermée',
        ]);
        DB::table('annees')->insert([
            'libelle' => '2035',
            'statut' => 'Fermée',
        ]);
    }
}
