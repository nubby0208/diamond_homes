<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_info_models', function (Blueprint $table) {
            $table->id();
            $table->string('contact_type')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('job_id')->nullable();
            $table->string('communication_type')->nullable();
            $table->string('value')->nullable();
            $table->string('preferred')->nullable();
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
        Schema::dropIfExists('contact_info_models');
    }
}
