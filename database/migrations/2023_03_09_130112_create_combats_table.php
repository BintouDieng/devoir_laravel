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
        Schema::create('combats', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('etat');
            $table->string('nomCombat');
            $table->string('nomLutteur1');
            $table->string('nomLutteur2');
            $table->string('nomPromoteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combats');
    }
};
