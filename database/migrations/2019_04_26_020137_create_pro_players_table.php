<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_players', function (Blueprint $table) {
            $table->string('account_id')->unique();
            $table->string('steamid')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatarmedium')->nullable();
            $table->string('avatarfull')->nullable();
            $table->string('profileurl')->nullable();
            $table->string('personaname')->nullable();
            $table->string('last_login')->nullable();
            $table->string('full_history_time')->nullable();
            $table->string('cheese')->nullable();
            $table->string('fh_unavailable')->nullable();
            $table->string('loccountrycode')->nullable();
            $table->string('last_match_time')->nullable();
            $table->string('plus')->nullable();
            $table->string('name')->nullable();
            $table->string('country_code')->nullable();
            $table->string('fantasy_role')->nullable();
            $table->string('team_id')->nullable();
            $table->string('team_name')->nullable();
            $table->string('team_tag')->nullable();
            $table->string('is_locked')->nullable();
            $table->string('is_pro')->nullable();
            $table->string('locked_until')->nullable();
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
        Schema::dropIfExists('pro_players');
    }
}
