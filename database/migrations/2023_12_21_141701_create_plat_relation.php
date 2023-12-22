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
        Schema::table('plat', function (Blueprint $table) {
            $table->foreignId('categories_id')->references('id')->on('categories');
        });

        Schema::create('etiquette_plat', function (Blueprint $table) {
            $table->foreignId('etiquette_id')->references('id')->on('etiquette');
            $table->foreignId('plat_id')->references('id')->on('plat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquette_plat');

        Schema::table('plat', function (Blueprint $table) {
            $table->dropForeign(['categories_id']);
    });
}

};