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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('itemName')->nullable();
            $table->double('price')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('callories')->nullable();
            $table->integer('itemgroupno')->nullable();
            $table->string('desc')->nullable();
            $table->string('itemImg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
