<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('fatherName');
            $table->string('motherName');
            
            $table->string('phone');
            $table->string('nationality');
            $table->string('address');
            $table->string('prtImage')->nullable();
            $table->string('studentFname');
            $table->string('studentLname');
            $table->string('section');
            $table->string('class');
            $table->string('gender');
            $table->string('studBirthdate');
            $table->string('studImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
};
