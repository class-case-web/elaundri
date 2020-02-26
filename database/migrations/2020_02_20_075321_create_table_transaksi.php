<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_customer');
            $table->integer('amount');
            $table->integer('qty');
            $table->date('start');
            $table->date('end');
            $table->string('status')->default('Baru');
            $table->timestamps();

            // $table->foregin('id_user')->references('id')->on('cms_users');
            // $table->foregin('id_customer')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
