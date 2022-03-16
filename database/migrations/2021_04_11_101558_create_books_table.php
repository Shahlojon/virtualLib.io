<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('categoryId')->nullable();
            $table->string('title');
            $table->string('isbn')->nullable();
            $table->string('image')->nullable();
            $table->dateTime('yearOfIssue')->nullable();
            $table->integer('pageCount')->nullable();
            $table->longText('description')->nullable();
            $table->string('file');
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
        Schema::dropIfExists('books');
    }
}
