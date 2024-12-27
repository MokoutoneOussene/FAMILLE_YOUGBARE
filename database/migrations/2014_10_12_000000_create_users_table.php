<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('prenom2')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('sexe')->nullable();
            $table->string('pere')->nullable();
            $table->string('mere')->nullable();
            $table->string('situation')->nullable();
            $table->string('conjoint')->nullable();
            $table->string('telephone')->nullable();
            $table->string('date_naiss')->nullable();
            $table->string('statut')->nullable();
            $table->string('quartier')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('cautisation')->nullable();
            $table->string('montant')->nullable();
            $table->string('role')->nullable();
            $table->integer('active')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
