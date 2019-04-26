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
            $table->bigIncrements('id');
            $table->string('steamId')->unique();
            $table->string('steamId2')->nullable();
            $table->string('steamId3')->nullable();
            $table->string('accountId')->nullable();
            $table->string('accountUrl')->nullable();
            $table->string('name')->nullable();
            $table->string('realName')->nullable();
            $table->string('profileUrl')->nullable();
            $table->string('privacyState')->nullable();
            $table->string('visibilityState')->nullable();
            $table->string('isOnline')->nullable();
            $table->string('onlineState')->nullable();
            $table->string('avatarSmall')->nullable();
            $table->string('avatarIcon')->nullable();
            $table->string('avatarMedium')->nullable();
            $table->string('avatarLarge')->nullable();
            $table->string('avatarFull')->nullable();
            $table->string('avatar')->nullable();
            $table->string('joined')->nullable();
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
