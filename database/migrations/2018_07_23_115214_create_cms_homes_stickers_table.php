<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsHomesStickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_homes_stickers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('x');
            $table->float('y');
            $table->float('z');
            $table->text('data');
            $table->tinyInteger('type');
            $table->tinyInteger('subtype');
            $table->text('skin');
            $table->integer('group_id');
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
        Schema::dropIfExists('cms_homes_stickers');
    }
}
