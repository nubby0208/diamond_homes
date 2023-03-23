<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardLeftModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_left_models', function (Blueprint $table) {
            $table->id();
            $table->string('action')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('lattitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('distance')->nullable();
            $table->string('photo')->nullable();
            $table->text('reason')->nullable();
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
        Schema::dropIfExists('card_left_models');
    }
}
