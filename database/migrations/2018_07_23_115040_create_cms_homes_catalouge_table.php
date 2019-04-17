<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsHomesCatalougeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_homes_catalouge', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->tinyInteger('type');
            $table->tinyInteger('subtype');
            $table->text('data');
            $table->integer('price');
            $table->integer('amount')->default(1);
            $table->text('category');
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
        Schema::dropIfExists('cms_homes_catalouge');
    }
}
