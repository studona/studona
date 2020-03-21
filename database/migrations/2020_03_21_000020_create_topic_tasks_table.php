<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_tasks', function (Blueprint $table) {
            $table->bigInteger('topicId')->unsigned();
            $table->foreign('topicId')->references('id')->on('topics');
            $table->bigInteger('taskId')->unsigned();
            $table->foreign('taskId')->references('id')->on('tasks');
            $table->timestamps();

            $table->primary(array('topicId', 'taskId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_tasks');
    }
}
