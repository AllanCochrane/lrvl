<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
   			    $table->string('title');
			      $table->text('summary')->nullable();
			      $table->text('description')->nullable();
			      $table->string('target')->nullable();
			      $table->tinyInteger('lecture_count')->unsigned()->nullable();
			      $table->string('running_time')->nullable();
			      $table->integer('price')->nullable();
			      $table->boolean('free');
			      $table->softDeletes();
			      $table->text('feature')->nullable();
			      $table->text('objective')->nullable();
			      $table->string('course_url_name')->nullable();
			      $table->boolean('available')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
