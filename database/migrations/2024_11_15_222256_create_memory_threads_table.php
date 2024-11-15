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
        Schema::create('memory_threads', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('family_id')->constrained('families')->onDelete('cascade'); // Family link
            $table->foreignId('created_by_user_id')->constrained('users')->onDelete('cascade'); // User link
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->enum('thread_type', ['Time Capsule', 'Keepsake Registry']);
            $table->json('tags')->nullable(); // For categorization
            $table->timestamp('creation_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memory_threads');
    }
};
