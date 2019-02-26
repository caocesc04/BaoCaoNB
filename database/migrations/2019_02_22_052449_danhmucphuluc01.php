<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Danhmucphuluc01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmucphuluc01', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieuthuoctinh');
            $table->integer('id_nhom');
            $table->string('donvitinh');
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
        Schema::dropIfExists('danhmucphuluc01');
    }
}
