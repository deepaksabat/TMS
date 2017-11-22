<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_name')->nullable();
            $table->string('staff_phone')->nullable();
            $table->string('staff_email')->nullable();
            $table->string('staff_sex')->nullable();
            $table->text('staff_address')->nullable();
            $table->integer('staff_salary')->default('0');
            $table->integer('staff_delete')->default('0');
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
        Schema::dropIfExists('staff');
    }
}
