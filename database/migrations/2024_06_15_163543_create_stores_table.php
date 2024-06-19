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
        Schema::create('stores', function (Blueprint $store) {
            $store->id();
            $store->string('name', 100);
            $store->string('description')->nullable();
            $store->text('about');
            $store->string('phone');
            $store->string('whatsapp');
            $store->string('logo1')->nullable();
            $store->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
