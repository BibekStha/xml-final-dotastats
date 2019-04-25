<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
  protected $fillable = ['id', 'name', 'localized_name', 'primary_attr', 'attack_type',
      'img', 'icon', 'base_health', 'base_health_regen', 'base_mana', 'base_mana_regen',
      'base_armor', 'base_mr', 'base_attack_min', 'base_attack_max', 'base_str', 'base_agi',
      'base_int', 'str_gain', 'agi_gain', 'int_gain', 'attack_range', 'projectile_speed',
      'attack_rate', 'move_speed', 'turn_rate', 'cm_enabled', 'legs', 'pro_ban', 'hero_id',
      'pro_win', 'pro_pick', '7_pick', '7_win', '1_pick', '1_win', '8_pick', '8_win',
      '3_pick', '3_win', '6_pick', '6_win', '2_pick', '2_win', '4_pick', '4_win', '5_pick',
      '5_win'];
}
