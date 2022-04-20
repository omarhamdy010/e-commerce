<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('image')->default('default.png');
            $table->integer('category_order')->default(1);

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
