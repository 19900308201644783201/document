<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToeicPart6AnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toeic_part_6_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('index')->comment('A, B, C, D');
            $table->string('content');
            $table->string('type_word')->nullable();
            $table->string('pronunciation')->nullable();
            $table->string('meaning')->nullable();
            $table->integer('toeic_part_6_question_id')->unsigned();
            $table->foreign('toeic_part_6_question_id')->references('id')->on('toeic_part_6_question')->onDelete('cascade');
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
        Schema::dropIfExists('toeic_part_6_answer');
    }
}
