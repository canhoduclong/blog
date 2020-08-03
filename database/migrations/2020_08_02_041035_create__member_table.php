<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_member', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('photo')->nullable();
            $table->longtext('content')->nullable();
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
        Schema::dropIfExists('_member');
    }
}
