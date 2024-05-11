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
        Schema::create('bms_mggr', function (Blueprint $table) {
            $table->id();
            $table->integer('baterai');
            $table->float('tegangan');
            $table->float('hambatan_dalam');
            $table->integer('persen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bms_mggrs');
    }
};
