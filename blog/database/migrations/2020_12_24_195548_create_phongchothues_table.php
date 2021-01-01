<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongchothuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongchothues', function (Blueprint $table) {
            $table->id();
            $table->integer('idchutro');
            $table->string('thanhpho');
            $table->string('quan');
            $table->string('diachi');
            $table->string('loaiphong');
            $table->string('mota');
            $table->integer('thongtinlienhe');
            $table->integer('giaca');
            $table->integer('dientich');
            $table->string('doituongchothue');
            $table->string('goithoigian');
            $table->string('songay');
            $table->string('phongtam');
            $table->string('phongbep');
            $table->string('dieuhoa');
            $table->string('bancong');
            $table->string('chungchu');
            $table->string('anh1');
            $table->string('anh2');
            $table->string('anh3');
            $table->string('duyetbaidang');
            $table->string('trangthaiphong');
            $table->date('thoigiandang');
            $table->integer('view_count');
            $table->date('handangbai');
            $table->integer('sotien');
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
        Schema::dropIfExists('phongchothues');
    }
}
