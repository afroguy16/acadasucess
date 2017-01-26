<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email', 125)->unique()->nullable();
            $table->string('sex', 10)->nullable();
            $table->date('date_of_birth', 125)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('password', 125)->nullable();
            $table->string('provider', 125)->nullable();
            $table->string('provider_id', 125)->unique()->nullable();
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
