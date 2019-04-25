<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('heroes', function (Blueprint $table) {
        $table->integer('id');
        $table->string('name')->nullable();
        $table->string('localized_name')->nullable();
        $table->string('primary_attr')->nullable();
        $table->string('attack_type')->nullable();
        $table->string('img')->nullable();
        $table->string('icon')->nullable();
        $table->integer('base_health')->nullable();
        $table->float('base_health_regen')->nullable();
        $table->integer('base_mana')->nullable();
        $table->float('base_mana_regen')->nullable();
        $table->integer('base_armor')->nullable();
        $table->integer('base_mr')->nullable();
        $table->integer('base_attack_min')->nullable();
        $table->integer('base_attack_max')->nullable();
        $table->integer('base_str')->nullable();
        $table->integer('base_agi')->nullable();
        $table->integer('base_int')->nullable();
        $table->integer('str_gain')->nullable();
        $table->float('agi_gain')->nullable();
        $table->float('int_gain')->nullable();
        $table->integer('attack_range')->nullable();
        $table->integer('projectile_speed')->nullable();
        $table->float('attack_rate')->nullable();
        $table->integer('move_speed')->nullable();
        $table->float('turn_rate')->nullable();
        $table->boolean('cm_enabled')->nullable();
        $table->integer('legs')->nullable();
        $table->integer('pro_ban')->nullable();
        $table->integer('hero_id')->nullable();
        $table->integer('pro_win')->nullable();
        $table->integer('pro_pick')->nullable();
        $table->integer('7_pick')->nullable();
        $table->integer('7_win')->nullable();
        $table->integer('1_pick')->nullable();
        $table->integer('1_win')->nullable();
        $table->integer('8_pick')->nullable();
        $table->integer('8_win')->nullable();
        $table->integer('3_pick')->nullable();
        $table->integer('3_win')->nullable();
        $table->integer('6_pick')->nullable();
        $table->integer('6_win')->nullable();
        $table->integer('2_pick')->nullable();
        $table->integer('2_win')->nullable();
        $table->integer('4_pick')->nullable();
        $table->integer('4_win')->nullable();
        $table->integer('5_pick')->nullable();
        $table->integer('5_win')->nullable();
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
        Schema::dropIfExists('heroes');
    }
}
