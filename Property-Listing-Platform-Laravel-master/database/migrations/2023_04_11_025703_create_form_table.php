<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('zip');
            $table->string('source');
            $table->string('income');
            $table->string('fee');
            $table->string('contact_number');
            $table->text('description');
            $table->foreignId('listing_id')->nullable()
            ->constrained()
            ->onDelete('set null');
            $table->foreignId('user_id')->nullable()
            ->constrained()
            ->onDelete('set null');
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
        Schema::dropIfExists('form');
    }
}
