<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToeicPart6QuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toeic_part_6_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question')->nullable();
            $table->string('translate')->nullable();
            $table->string('answer')->nullable();
            $table->string('explain')->nullable();
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
        Schema::dropIfExists('toeic_part_6_question');
    }
}
