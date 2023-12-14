<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('citizenships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('phonenumber');
            $table->string('address');
            $table->integer('age');
            $table->string('religion');
            $table->string('gender');
            $table->string('job');
            $table->string('marialstatus');
            $table->string('citizenship');
            $table->string('picture'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizenships');
    }
};
