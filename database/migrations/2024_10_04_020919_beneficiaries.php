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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('phone')->nullable();
            $table->unsignedInteger('relationship_id');
            $table->foreign('relationship_id')->references('id')->on('relationships');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countrys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
