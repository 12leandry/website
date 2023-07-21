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
        Schema::create('projets_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('projet_id')->nullable();
            $table->string('path');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets_images');
    }
};
