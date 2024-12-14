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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
