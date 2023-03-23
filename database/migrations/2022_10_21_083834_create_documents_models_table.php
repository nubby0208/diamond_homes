<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('loaded_by')->nullable();
            $table->string('job_code')->nullable();
            $table->string('location')->nullable();
            $table->string('code')->nullable();
            $table->string('job_id')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('documents_models');
    }
}
