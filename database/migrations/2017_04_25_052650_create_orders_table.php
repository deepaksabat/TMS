<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('customer_id');
            $table->integer('staff_id');
            $table->date('delivery_date');
            $table->integer('order_amount')->default('0');
            $table->integer('order_paid')->default('0');
            $table->string('order_status')->nullable();
            $table->text('order_details');
            $table->integer('order_delete')->default('0');

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
        Schema::dropIfExists('orders');
    }
}
