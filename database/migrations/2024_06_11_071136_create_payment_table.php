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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('idpaye'); 
            $table->integer('command_idp');
            $table->string('emailp', 250);
            $table->string('produitp', 250);
            $table->integer('prixp');
            $table->integer('quantitep');
            $table->date('datep');
            $table->double('totale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
