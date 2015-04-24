<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleContentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_contents', function($table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_id');
            $table->integer('lang_id');
            $table->longText('content');
            $table->string('brief', 511);
            $table->string('title', 255);
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
        Schema::drop('article_contents');
    }

}
