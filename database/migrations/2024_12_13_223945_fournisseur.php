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

        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_person')->nullable();
        });

        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('raw_materials_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->restrictOnDelete();
            $table->foreignId('supplier_id')->constrained('suppliers')->restrictOnDelete();
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->date('purchase_date');
        });

        Schema::create('reference_versions_raw_material', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reference_version_id')->constrained('reference_versions')->restrictOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->restrictOnDelete();
            $table->integer('quantity');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
