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
        Schema::create('family_tree_edges', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('source_node_id'); // Source node
            $table->unsignedBigInteger('target_node_id'); // Target node
            $table->string('edge_type', 255)->default('default'); // Type of edge
            $table->timestamps();

            $table->foreign('source_node_id')->references('id')->on('family_tree_nodes')->onDelete('cascade');
            $table->foreign('target_node_id')->references('id')->on('family_tree_nodes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_tree_edges');
    }
};
