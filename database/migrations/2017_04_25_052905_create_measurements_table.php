<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('order_id');
            $table->string('neck')->nullable();
            $table->string('chest')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('bicep')->nullable();
            $table->string('wrist')->nullable();
            $table->string('length')->nullable();
            $table->string('thigh')->nullable();
            $table->string('crotch')->nullable();
            $table->string('ankles')->nullable();
            $table->string('inseam')->nullable();
            $table->string('outseam')->nullable();
            $table->text('other_measurements');

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
        Schema::dropIfExists('measurements');
    }
}
