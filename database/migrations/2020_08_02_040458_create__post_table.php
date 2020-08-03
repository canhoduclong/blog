<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_post', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->tinyInteger('cid')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->mediumText('desription')->nullable();
            $table->longtext('content')->nullable();
            $table->mediumText('keyword')->nullable();
            $table->date('created')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('_post');
    }
}
