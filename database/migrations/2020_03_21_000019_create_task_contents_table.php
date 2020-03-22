<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_contents', function (Blueprint $table) {
            $table->bigInteger('taskId')->unsigned();
            $table->foreign('taskId')->references('id')->on('tasks');
            $table->bigInteger('contentId')->unsigned();
            $table->foreign('contentId')->references('id')->on('contents');
            $table->timestamps();

            $table->primary(array('taskId', 'contentId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_contents');
    }
}
