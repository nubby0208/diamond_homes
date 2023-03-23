<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExemptionsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemptions_models', function (Blueprint $table) {
            $table->id();
            $table->string('exemptions_type')->nullable();
            $table->string('exemptions_by')->nullable();
            $table->string('job_id')->nullable();
            $table->string('eot_type')->nullable();
            $table->string('eot_date_time')->nullable();
            $table->string('api')->nullable();
            $table->string('reason')->nullable();
            $table->string('additional_reason')->nullable();
            $table->text('notes')->nullable();
            $table->string('status')->nullable();
            $table->string('acknowledged')->nullable();
            $table->string('acknowledged_by')->nullable();
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
        Schema::dropIfExists('exemptions_models');
    }
}
