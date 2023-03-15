<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSundaySchoolStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_sunday_school_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('adge');
            $table->string('gender');
            $table->integer('class_ID')->unsigned();

            
            $table->foreign('class_ID')->references('id')->on('sundayschoolclasses')
            ->onDelete('cascade');
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
        Schema::dropIfExists('_sunday_school_students');
    }
}
