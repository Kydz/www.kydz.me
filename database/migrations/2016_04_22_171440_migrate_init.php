<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrateInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $t) {
            $t->increments('id');
            $t->string('title');
            $t->string('brief');
            $t->text('content');
            $t->integer('hit')->default(0);
            $t->tinyInteger('type')->comments('1-markdown, 2-richtext');
            $t->tinyInteger('active')->default(1)->comments('1-active, 0-deactive');
            $t->timestamps();
            $t->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
