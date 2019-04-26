<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
          $table->string('tracked_until')->nullable();
          $table->string('solo_competitive_rank')->nullable();
          $table->string('account_id')->unique();
          $table->string('personaname')->nullable();
          $table->string('name')->nullable();
          $table->string('plus')->nullable();
          $table->string('cheese')->nullable();
          $table->string('steamid')->nullable();
          $table->string('avatar')->nullable();
          $table->string('avatarmedium')->nullable();
          $table->string('avatarfull')->nullable();
          $table->string('profileurl')->nullable();
          $table->string('last_login')->nullable();
          $table->string('loccountrycode')->nullable();
          $table->string('is_contributor')->nullable();
          $table->string('mmr_estimate')->nullable();
          $table->string('rank_tier')->nullable();
          $table->string('leaderboard_rank')->nullable();
          $table->string('competitive_rank')->nullable();
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
        Schema::dropIfExists('players');
    }
}
