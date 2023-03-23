<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes_models', function (Blueprint $table) {
            $table->id();
            $table->string('audiences')->nullable();
            $table->string('title')->nullable();
            $table->string('job_id')->nullable();
            $table->text('description')->nullable();
            $table->string('note_type')->nullable();
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
        Schema::dropIfExists('notes_models');
    }
}
