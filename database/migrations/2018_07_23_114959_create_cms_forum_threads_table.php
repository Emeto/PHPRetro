<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsForumThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_forum_threads', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type');
            $table->string('title');
            $table->string('author');
            $table->string('lastpost_author');
            $table->dateTime('lastpost_date');
            $table->integer('views');
            $table->integer('posts');
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
        Schema::dropIfExists('cms_forum_threads');
    }
}
