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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('family_name', 255);
            $table->string('family_photo')->nullable();
            $table->foreignId('admin_user_id')->constrained('users')->onDelete('cascade'); // Family admin
            $table->string('family_code', 6)->unique(); // Unique family code
            $table->json('layout_settings')->nullable(); // VueFlow layout settings
            $table->boolean('is_public')->default(false); // Public or private tree
            $table->timestamp('creation_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
