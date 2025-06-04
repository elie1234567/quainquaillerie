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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('command_id'); 
            $table->unsignedBigInteger('idproduit');
            $table->string('email');
            $table->integer('quantiter');
            $table->decimal('prix', 10, 2);
            $table->date('date_comm');
            $table->unsignedBigInteger('idclit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
