<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDB extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_cates_langs', function($table){
            $table->integer('lang_id');
        });

        Schema::screate('tags', function($table){
            $table->increments('id');
            $table->morphs('taggable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_cates_langs', function($table){
            
        });

        Schema::drop('tags');
    }

}
