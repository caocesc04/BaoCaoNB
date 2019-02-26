<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Baocaophuluc04 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaophuluc04', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detail_dn');
            $table->integer('id_kybaocao');
            $table->integer('id_phuluc04');
            $table->string('maso');
            $table->integer('tongsotainan');
            $table->integer('svcnguoichet');
            $table->integer('svctren2nguoibinan');
            $table->integer('tongsonguoibinan');
            $table->integer('tsnkhongql');
            $table->integer('tsldnu');
            $table->integer('tsldnukhongql');
            $table->integer('tsnchet');
            $table->integer('tsnckhongql');
            $table->integer('tsnbithuongnang');
            $table->integer('tsnbtnkhongql');
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
        Schema::dropIfExists('baocaophuluc04');
    }
}
