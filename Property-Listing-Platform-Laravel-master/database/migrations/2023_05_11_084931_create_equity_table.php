<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equity', function (Blueprint $table) {
            $table->id();
            $table->string('paymentdate');
            $table->string('monthlypayment');
            $table->string('principal');
            $table->string('interest');
            $table->tinyInteger('stats')->default('0');
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
        Schema::dropIfExists('equity');
    }
}
