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
            $table->integer('category_id');
            $table->string('title');
            $table->integer('auther_id');
            $table->string('code')->nullable()->unique();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->integer('web_page')->nullable();
            $table->text('view_url')->nullable();
            $table->text('download_url')->nullable();
            $table->text('image')->nullable();
            $table->integer('template_delivery');
            $table->float('template_regular_price')->nullable();
            $table->float('template_selling_price')->nullable();
            $table->string('template_discount_type')->nullable();
            $table->float('template_discount_amount')->nullable();
            $table->integer('sales_count')->default(0);
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('feature_status')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
