<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_contents', function (Blueprint $table) {
            $table->bigInteger('topicId')->unsigned();
            $table->foreign('topicId')->references('id')->on('topics');
            $table->bigInteger('contentId')->unsigned();
            $table->foreign('contentId')->references('id')->on('contents');
            $table->timestamps();

            $table->primary(array('topicId', 'contentId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_contents');
    }
}
