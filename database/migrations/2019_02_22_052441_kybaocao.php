<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kybaocao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kybaocao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenky');
            $table->dateTime('thoigianbatdau');
            $table->dateTime('thoigianketthuc');
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
        Schema::dropIfExists('kybaocao');
    }
}
