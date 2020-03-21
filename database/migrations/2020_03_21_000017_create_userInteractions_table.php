<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userInteractions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('objectId')->unsigned();
            $table->bigInteger('objectTypeId')->unsigned();
            $table->foreign('objectTypeId')->references('id')->on('object_types');
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
        Schema::dropIfExists('userinteractions');
    }
}
