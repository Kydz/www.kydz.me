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
        // update article table columns
        Schema::table('articles', function($table){
            $table->longText('content');
            $table->string('brief', 511);
            $table->string('title', 255);
        });
        DB::statement('UPDATE articles a, article_contents ac SET a.content = ac.content, a.brief = ac.brief, a.title = ac.title WHERE a.id = ac.article_id');
        // drop table article_contents
        Schema::drop('article_contents');

        // update cate table columns
        Schema::table('article_cates', function($table){
            $table->string('cate_name', 64);
            $table->string('cate_desc', 256);
        });
        // drop table article_cates_langs
        Schema::drop('article_cates_langs');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
    }

}
