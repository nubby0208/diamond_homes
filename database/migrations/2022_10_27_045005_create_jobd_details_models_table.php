<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobdDetailsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobd_details_models', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('job_code')->nullable();
            $table->text('description')->nullable();
            $table->string('uom')->nullable();
            $table->string('damages')->nullable();
            $table->string('notes')->nullable();
            $table->string('quantity')->nullable();
            $table->string('rate')->nullable();
            $table->string('total')->nullable();
            $table->string('variance')->nullable();
            $table->string('complete')->nullable();
            $table->string('completed_by')->nullable();
            $table->string('pwrk_req')->nullable();
            $table->string('exclude')->nullable();
            $table->string('pre-app')->nullable();
            $table->string('allocated')->nullable();
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
        Schema::dropIfExists('jobd_details_models');
    }
}
