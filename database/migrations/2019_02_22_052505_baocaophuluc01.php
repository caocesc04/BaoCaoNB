<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Baocaophuluc01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaophuluc01', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detail_dn');
            $table->integer('id_kybaocao');
            $table->integer('id_phuluc01');
            $table->integer('soluong');
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
        Schema::dropIfExists('baocaophuluc01');
    }
}
