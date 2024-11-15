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
        Schema::create('family_tree_nodes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('family_id')->constrained('families')->onDelete('cascade'); // Family link
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); // Optional link to a user
            $table->unsignedBigInteger('parent_node_id')->nullable(); // Parent node link
            $table->string('relation_type', 255); // Relation type (Parent, Sibling, etc.)
            $table->float('position_x')->nullable(); // X-axis position for VueFlow
            $table->float('position_y')->nullable(); // Y-axis position for VueFlow
            $table->timestamps();

            $table->foreign('parent_node_id')->references('id')->on('family_tree_nodes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_tree_nodes');
    }
};
