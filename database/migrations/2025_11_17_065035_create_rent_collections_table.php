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
        Schema::create('rent_collections', function (Blueprint $table) {

            $table->id();
            $table->foreignId('rental_id')->constrained()->onDelete('cascade');
            $table->date('month');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date')->nullable();
            $table->integer('status_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_collections');
    }
};
