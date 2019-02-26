<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doanhnghiep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanhnghiep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('nganhsanxuat');
            $table->string('loaihinh');
            $table->string('coquanquanly');
            $table->string('diachi');
            $table->string('sodienthoai');
            $table->string('loaihinhcoso');
            $table->string('maloaihinh');
            $table->string('linhvucsanxuat');
            $table->string('malinhvuc');
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
        Schema::dropIfExists('doanhnghiep');
    }
}
