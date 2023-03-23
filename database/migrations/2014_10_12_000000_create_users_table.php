<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();;
            $table->string('user_name')->nullable();;
            $table->string('first_name')->nullable();;
            $table->string('last_name')->nullable();;
          
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',128)->nullable();;
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('idr_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->string('user_type')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
