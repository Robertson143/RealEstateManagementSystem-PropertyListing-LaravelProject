<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('unit');
            $table->string('price');
            $table->string('phase');
            $table->string('unitnumber');
            $table->string('street');
            $table->string('bank');
            $table->string('block');
            $table->string('downpayment');
            $table->string('reservation');
            $table->string('balance');
            $table->string('monthly');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('popular')->default('0');
            $table->tinyInteger('checklist1')->default('0');
            $table->tinyInteger('checklist2')->default('0');
            $table->tinyInteger('checklist3')->default('0');
            $table->tinyInteger('checklist4')->default('0');
            $table->tinyInteger('checklist5')->default('0');
            $table->tinyInteger('checklist6')->default('0');
            $table->tinyInteger('checklist7')->default('0');
            $table->tinyInteger('checklist8')->default('0');
            $table->tinyInteger('checklist9')->default('0');
            $table->tinyInteger('checklist10')->default('0');
            $table->string('tax');
            $table->string('contract');
            $table->string('total');
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
        Schema::dropIfExists('payment');
    }
}
