<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300);
            $table->text('description');
            $table->float('price', 10, 2);
            $table->string('available');
            $table->string('phase');
            $table->string('street');
            $table->string('block');
            $table->string('unit1');
            $table->string('unit2');
            $table->string('unit3');
            $table->string('unit4');
            $table->string('unit5');
            $table->string('unit6');
            $table->string('unit7');
            $table->string('unit8');
            $table->float('square_feet', 10, 2);
            $table->float('lot_size', 10, 2);
            $table->integer('bedroom');
            $table->integer('garage');
            $table->integer('bathroom');
            $table->string('porch');
            $table->string('living');
            $table->string('kitchen');
            $table->string('dining');
            $table->string('den');
            $table->string('toilet');
            $table->string('bedarea');
            $table->string('garagearea');
            $table->string('city');
            $table->string('country');
            $table->string('thumbnail_0');
            $table->string('thumbnail_1')->nullable();
            $table->string('thumbnail_2')->nullable();
            $table->string('thumbnail_3')->nullable();
            $table->string('thumbnail_4')->nullable();
            $table->string('thumbnail_5')->nullable();
            $table->string('thumbnail_6')->nullable();
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
            $table->tinyInteger('checklist11')->default('0');
            $table->tinyInteger('checklist12')->default('0');
            $table->tinyInteger('checklist13')->default('0');
            $table->tinyInteger('checklist14')->default('0');
            $table->tinyInteger('checklist15')->default('0');
            $table->tinyInteger('checklist16')->default('0');
            $table->tinyInteger('checklist17')->default('0');
            $table->tinyInteger('checklist18')->default('0');
            $table->timestamps();
            $table->foreignId('realtor_id')->nullable()
                    ->constrained()
                    ->onDelete('cascade');
            $table-> enum('is_published',['0','1']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
