<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinteractionContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinteraction_contents', function (Blueprint $table) {
            $table->bigInteger('userInteractionId')->unsigned();
            $table->foreign('userInteractionId')->references('id')->on('userInteractions');
            $table->bigInteger('contentId')->unsigned();
            $table->foreign('contentId')->references('id')->on('contents');
            $table->timestamps();

            $table->primary(array('userInteractionId', 'contentId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinteraction_contents');
    }
}
