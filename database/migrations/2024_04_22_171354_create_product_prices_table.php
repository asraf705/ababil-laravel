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
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->text('product_id')->unique();
            $table->integer('basic_page')->nullable();
            $table->integer('basic_delivery')->nullable();
            $table->float('basic_regular_price')->nullable();
            $table->float('basic_discount_amount')->nullable();
            $table->string('basic_discount_type')->nullable();
            $table->float('basic_selling_price')->nullable();
            $table->integer('pro_page')->nullable();
            $table->integer('pro_delivery')->nullable();
            $table->float('pro_regular_price')->nullable();
            $table->float('pro_discount_amount')->nullable();
            $table->string('pro_discount_type')->nullable();
            $table->float('pro_selling_price')->nullable();
            $table->integer('pre_page')->nullable();
            $table->integer('pre_delivery')->nullable();
            $table->float('pre_regular_price')->nullable();
            $table->float('pre_discount_amount')->nullable();
            $table->string('pre_discount_type')->nullable();
            $table->float('pre_selling_price')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};
