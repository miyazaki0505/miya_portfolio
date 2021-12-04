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
            $table->string('last_name', 16);
            $table->string('first_name', 16);
            $table->string('last_name_ruby', 16);
            $table->string('first_name_ruby', 16);
            $table->integer('birth_year');
            $table->integer('birth_month');
            $table->integer('birth_day');
            $table->string('email', 128)->unique();
            $table->string('password', 64);
            $table->integer('work_location');
            $table->integer('occupation');
            $table->integer('language');
            $table->text('about_myself');
            $table->rememberToken();
            $table->softDeletes();
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
