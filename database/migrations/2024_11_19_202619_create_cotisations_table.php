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
        Schema::create('cotisations', function (Blueprint $table) {
            $table->id();
            $table->integer('montant')->nullable();
            $table->string('periode')->nullable();
            $table->string('type')->nullable();
            $table->string('motif')->nullable();
            $table->integer('nbr_mois')->nullable();
            $table->string('autres_info')->nullable();
            $table->integer('total_cotisation')->nullable();
            
            $table->foreignId('annees_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotisations');
    }
};
