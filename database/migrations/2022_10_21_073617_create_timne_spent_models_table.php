<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimneSpentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timne_spent_models', function (Blueprint $table) {
            $table->id();
            $table->string('contact_type')->nullable();
            $table->string('created_by')->nullable();
            $table->string('job_id')->nullable();
            $table->text('comments')->nullable();
            $table->string('card_left')->nullable();
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
        Schema::dropIfExists('timne_spent_models');
    }
}
