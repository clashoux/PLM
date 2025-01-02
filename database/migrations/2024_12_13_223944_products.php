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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prefix');
        });

        Schema::create('ranges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prefix');
        });

        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prefix');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('range_id')->constrained('ranges');
        });

        Schema::create('reference_versions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_in_sales')->default(false);
            $table->float('production_price');
            $table->foreignId('reference_id')->constrained('references');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('city_id')->constrained('cities');
            $table->enum('type', ['Factory', 'Warehouse', 'Selling Point']);
        });

        Schema::create('reference_version_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('locations');
            $table->foreignId('reference_version_id')->constrained('reference_versions');
            $table->integer('quantity');
            $table->float('selling_price');
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reference_version_location_id')->constrained('reference_version_locations');
            $table->enum('type', ['In', 'Out']);
            $table->integer('quantity');
            $table->float('unit_price');
            $table->date('date');
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
