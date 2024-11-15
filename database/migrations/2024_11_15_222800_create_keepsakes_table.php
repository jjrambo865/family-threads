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
        Schema::create('keepsakes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('item_id')->constrained('memory_items')->onDelete('cascade'); // Memory item link
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keepsakes');
    }
};
