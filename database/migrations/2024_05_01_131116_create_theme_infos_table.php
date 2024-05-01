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
        Schema::create('theme_infos', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('motto')->default(0)->nullable();
            $table->text('biography')->default(0)->nullable();
            $table->string('contact_mobile')->default(0)->nullable();
            $table->string('whapp_mobile')->default(0)->nullable();
            $table->string('support_mobile')->default(0)->nullable();
            $table->string('contact_email')->default(0)->nullable();
            $table->string('support_email')->default(0)->nullable();
            $table->text('address')->default(0)->nullable();
            $table->text('domain_url')->default(0)->nullable();
            $table->text('facebook_url')->default(0)->nullable();
            $table->text('twitter_url')->default(0)->nullable();
            $table->text('youtube_url')->default(0)->nullable();
            $table->text('linked_in_url')->default(0)->nullable();
            $table->text('instagram_url')->default(0)->nullable();
            $table->text('logo')->default(0)->nullable();
            $table->text('favicon')->default(0)->nullable();
            $table->text('trade_license')->default(0)->nullable();
            $table->text('tin_certificate')->default(0)->nullable();
            $table->text('ecab_certificate')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_infos');
    }
};
