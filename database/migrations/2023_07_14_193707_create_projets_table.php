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
        Schema::create('projets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('service_id')->nullable();
            $table->text('titre');
            $table->longText('sous_titre');
            $table->longText('description_paragraphe_1');
            $table->longText('description_paragraphe_2')->nullable();
            $table->longText('description_paragraphe_3')->nullable();
            $table->text('client_name');
            $table->date('projet_date');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
