<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicPreconditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_preconditions', function (Blueprint $table) {
            $table->bigInteger('topicId')->unsigned();
            $table->foreign('topicId')->references('id')->on('topics');
            $table->bigInteger('preconditionTopicId')->unsigned();
            $table->foreign('preconditionTopicId')->references('id')->on('topics');
            $table->timestamps();

            $table->primary(array('topicId', 'preconditionTopicId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_preconditions');
    }
}
