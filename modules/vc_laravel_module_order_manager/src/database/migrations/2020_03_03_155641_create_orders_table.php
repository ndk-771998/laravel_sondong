<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('username');
            $table->string('address');
            $table->BigInteger('total');
            $table->longText('order_note')->nullable();
            $table->tinyInteger('payment_method')->default(1);
            $table->unsignedBigInteger('payment_status')->default(1);
            $table->unsignedBigInteger('status_id')->default(1);
            $table->Integer('status')->default(1);
            $table->uuid('cart_id')->nullable();
            $table->timestamps();
            $table->foreign('payment_status')->references('id')->on('payment_statuses');
            $table->foreign('status_id')->references('id')->on('order_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('orders');
    }
}
