<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkientistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skientists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('birthplace')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('scientificSphere')->nullable();
            $table->string('academicDegree')->nullable();
            $table->string('academicTitle')->nullable();
            $table->string('placeOfWork')->nullable();
            $table->string('awardsAndPrizes')->nullable();
            $table->string('dateOfDeath')->nullable();
            $table->string('placeOfDeath')->nullable();
            $table->string('shortDescription')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('isActive')->default(true);
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
        Schema::dropIfExists('skientists');
    }
}
