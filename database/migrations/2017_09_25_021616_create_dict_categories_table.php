<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dict_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->default(0)->comment('父子关系');
            $table->string('name')->unique()->default('')->comment('名称');
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('weight')->default(0)->comment('排序');
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
        Schema::dropIfExists('dict_categories');
    }
}
