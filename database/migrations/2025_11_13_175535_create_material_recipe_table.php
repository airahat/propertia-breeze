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
    Schema::create('material_recipe', function (Blueprint $table) {
        $table->id();
        $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
        $table->foreignId('material_id')->constrained()->onDelete('cascade');
        $table->decimal('quantity', 15, 3); // how much material for the base area
        $table->decimal('cost', 15, 2)->nullable(); // can be auto-calculated later
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_recipe');
    }
};
