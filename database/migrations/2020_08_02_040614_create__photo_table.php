<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_photo', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('pid');
            $table->mediumText('image')->nullable(); 
            $table->mediumText('link')->nullable(); 
            $table->mediumText('desription')->nullable();              
            $table->date('created')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('del')->nullable();
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
        Schema::dropIfExists('_photo');
    }
}
