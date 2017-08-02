<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinglePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->unique()->comment('唯一索引 一个类型只能建立一条内容 1 关于我们 2 免责声明 3 网站帮助');
            $table->text('content');
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
        Schema::dropIfExists('single_pages');
    }
}
