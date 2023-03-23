<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherWorksModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_works_models', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('client_ref')->nullable();
            $table->string('status')->nullable();
            $table->string('priority')->nullable();
          
            $table->text('description')->nullable();
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
        Schema::dropIfExists('other_works_models');
    }
}
