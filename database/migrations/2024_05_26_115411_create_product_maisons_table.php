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
        Schema::create('product_maisons', function (Blueprint $table) {
            $table->id('idm');
            $table->string('articlem');
            $table->integer('quantitem');
            $table->decimal('prixem', 8, 2);
            $table->binary('imagem'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_maisons');
    }
};
