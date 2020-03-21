<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_subjects', function (Blueprint $table) {
            $table->bigInteger('groupId')->unsigned();
            $table->foreign('groupId')->references('id')->on('groups');
            $table->bigInteger('subjectId')->unsigned();
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->timestamps();

            $table->primary(array('groupId', 'subjectId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_subjects');
    }
}
