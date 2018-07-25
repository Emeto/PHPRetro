<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_content', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contentkey');
            $table->text('contentvalue');
            $table->text('setting_title');
            $table->text('setting_desc');
            $table->enum('fieldtype', [1, 2, 3])->default(1);
            $table->string('category')->default(1);
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
        Schema::dropIfExists('cms_content');
    }
}
