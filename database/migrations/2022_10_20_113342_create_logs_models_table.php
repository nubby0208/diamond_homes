<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_models', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->string('action')->nullable();
            $table->string('job_id')->nullable();
            $table->text('description')->nullable();
            $table->string('dispatch_id')->nullable();
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
        Schema::dropIfExists('logs_models');
    }
}
