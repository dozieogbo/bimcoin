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
            $table->uuid('id');
            $table->primary('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('age');
            $table->string('profession');
            $table->string('phone');
            $table->string('religion');
            $table->string('country');
            $table->string('how_you_knew');
            $table->string('email')->unique();
            $table->string('address')->unique();
            $table->string('password');
            $table->boolean('is_active')->default(false);
            $table->boolean('is_verified')->default(false);
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
