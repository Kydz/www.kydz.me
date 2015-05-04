<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCateLangTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_cates_langs', function($table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_cate_id');
            $table->string('cate_name', 64);
            $table->string('cate_desc', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_cates_langs');
    }

}
