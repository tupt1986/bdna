<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BgVothuanhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_vothuanhans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sohieu')->unique();
            $table->date('ngaythang');
            $table->string('nguoigui');
            $table->string('nguoinhan');
            $table->integer('trongluong');
            $table->string('loaibuugui');
            $table->string('noidung');
            $table->string('ghichu');
            $table->softDeletes();
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
        Schema::drop('bg_vothuanhans');
    }
}
