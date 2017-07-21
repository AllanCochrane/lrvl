<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->unsigned();
			      $table->string('title');
			      $table->text('description')->nullable();
			      $table->string('URL')->nullable();
			      $table->timestamps();
			      $table->integer('course_id')->unsigned();
			      $table->softDeletes();
			      $table->boolean('sample')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
