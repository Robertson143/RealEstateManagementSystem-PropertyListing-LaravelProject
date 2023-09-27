<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientform', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('popular')->default('0');
            $table->string('image');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('meta_title');
            $table->string('meta_descrip');
            $table->string('meta_keywords'); 
            $table->string('birthday');
            $table->string('phase');
            $table->string('street');
            $table->string('block');
            $table->string('unitnumber');
            $table->string('price');
            $table->string('unit');
            $table->string('income');
            $table->tinyInteger('stats')->default('0');
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
        Schema::dropIfExists('clientform');
    }
}
