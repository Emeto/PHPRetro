<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsMinimailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_minimail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('sender_id');
            $table->string('subject');
            $table->text('message');
            $table->enum('read', [0, 1]);
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
        Schema::dropIfExists('cms_minimail');
    }
}
