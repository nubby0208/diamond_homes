<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_models', function (Blueprint $table) {
            $table->id();
            
            $table->string('title')->nullable();;
            $table->text('description')->nullable();
            $table->string('order_no')->nullable();
            $table->text('address')->nullable();
            $table->string('external_job_no')->nullable();
            $table->string('ecd')->nullable();
            $table->text('type')->nullable();
            $table->string('client_name')->nullable();
            $table->string('priority')->nullable();
            $table->string('assigned')->nullable();
            $table->string('allocation')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('status')->nullable();
            $table->string('ret_rem')->nullable();
            $table->text('comments')->nullable();
            $table->string('approved')->nullable();
            $table->string('value')->nullable();
            $table->string('your_ref')->nullable();
            $table->string('cl_access_no')->nullable();
            $table->string('notes')->nullable();
            
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
        Schema::dropIfExists('jobs_models');
    }
}
