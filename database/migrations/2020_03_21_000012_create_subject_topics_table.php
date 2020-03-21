<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topics', function (Blueprint $table) {
            $table->bigInteger('subjectId')->unsigned();
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->bigInteger('topicId')->unsigned();
            $table->foreign('topicId')->references('id')->on('topics');
            $table->timestamps();

            $table->primary(array('subjectId', 'topicId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_topics');
    }
}
