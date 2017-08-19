<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  crea tablas
        Schema::create('posts', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('channel_id', false, true);
            $table->integer('total_replies', false, true);
            $table->string('title, 200');
            $table->text('body');
            $table->string('slug')->nullable();
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
        //
    }
}
