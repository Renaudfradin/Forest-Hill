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
        Schema::create('contremarques', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('tile');
            $table->string('npass');
            //    $table->unsignedInteger('businesses_id')->nullable();
            $table->string('reprise');
            $table->string('typem');
            //$table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contremarques');
    }
};
