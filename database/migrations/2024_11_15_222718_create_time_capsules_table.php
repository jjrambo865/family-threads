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
        Schema::create('time_capsules', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('item_id')->constrained('memory_items')->onDelete('cascade'); // Memory item link
            $table->timestamp('open_date');
            $table->boolean('notification_sent')->default(false);
            $table->enum('status', ['Locked', 'Opened']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_capsules');
    }
};
