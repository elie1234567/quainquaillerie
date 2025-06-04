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
        Schema::create('productvoitures', function (Blueprint $table) {
            $table->id('idv');
            $table->string('articlev');
            $table->integer('quantitev');
            $table->decimal('prixev', 8, 2);
            $table->binary('imagev'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productvoitures');
    }
};
