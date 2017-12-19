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
            $table->string('nickname')->unique();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('password')->nullable();
            $table->integer('account_id')->unique()->nullable();
            $table->integer('twitter_id')->unique()->nullable();
            $table->integer('facebook_id')->unique()->nullable();
            $table->integer('google_id')->unique()->nullable();
            $table->integer('instagram_id')->unique()->nullable();
            $table->integer('stripe_id')->unique()->nullable();
            $table->boolean('is_confirmed')->default(false);
            $table->string('gender')->nullable();
            $table->date('birth')->nullable();
            $table->string('bio')->nullable();
            $table->string('social_provider')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
            $table->softDeletes();
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
