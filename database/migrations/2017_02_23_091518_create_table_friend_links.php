<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFriendLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url')->unique()->comment('url唯一标记');
            $table->string('pic');
            $table->string('desc');
            $table->integer('weight')->default(0);
            $table->string('info')->default('');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('friend_links');
    }
}


