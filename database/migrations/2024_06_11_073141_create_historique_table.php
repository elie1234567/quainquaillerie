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
        Schema::create('historique', function (Blueprint $table) {
            $table->id('id_histo'); 
            $table->integer('command_idp');
            $table->string('emailp', 250);
            $table->string('produitp', 250);
            $table->integer('prixp');
            $table->integer('quantitep');
            $table->string('datep', 2500);
            $table->double('totale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique');
    }
};
