<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dicts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('fanti', 1)->unique()->comment('繁体字');
            $table->char('jianti', 1)->unique()->comment('简体字');
            $table->char('slug', 1)->unique()->comment('url唯一标记');
            $table->string('pinyin', 20)->comment('拼音');
            $table->integer('dict_bushou_id');
            $table->integer('dict_category_id');
            $table->string('jiagu', 50)->comment('甲骨图片');
            $table->string('yitizi', 50)->comment('异体字')->default("");
            $table->string('shuowen', 80)->comment('说文解字');
            $table->string('jieshi', 1000)->comment('解释');
            $table->string('cizu', 1000)->comment('词组');
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
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
        Schema::dropIfExists('dicts');
    }
}
