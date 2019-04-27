<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimpleOpenDota\odota_api;
use App\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $s_heroes = Hero::where('primary_attr', 'str')->get();
      $a_heroes = Hero::where('primary_attr', 'agi')->get();
      $i_heroes = Hero::where('primary_attr', 'int')->get();
      
      return view('heroes.index')
          ->with('s_heroes', $s_heroes)
          ->with('a_heroes', $a_heroes)
          ->with('i_heroes', $i_heroes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $od = new odota_api();
        $heroes = $od->heroes_stats();
        
        foreach($heroes as $hero) {
          $t = Hero::where('id', $hero['id'])->first();
  
          if(!$t){
            $t = Hero::create([
              'id' => $hero['id'],
              'name' => $hero['name'],
              'localized_name' => $hero['localized_name'],
              'primary_attr' => $hero['primary_attr'],
              'attack_type' => $hero['attack_type'],
              'img' => $hero['img'],
              'icon' => $hero['icon'],
              'base_health' => $hero['base_health'],
              'base_health_regen' => $hero['base_health_regen'],
              'base_mana' => $hero['base_mana'],
              'base_mana_regen' => $hero['base_mana_regen'],
              'base_armor' => $hero['base_armor'],
              'base_mr' => $hero['base_mr'],
              'base_attack_min' => $hero['base_attack_min'],
              'base_attack_max' => $hero['base_attack_max'],
              'base_str' => $hero['base_str'],
              'base_agi' => $hero['base_agi'],
              'base_int' => $hero['base_int'],
              'str_gain' => $hero['str_gain'],
              'agi_gain' => $hero['agi_gain'],
              'int_gain' => $hero['int_gain'],
              'attack_range' => $hero['attack_range'],
              'projectile_speed' => $hero['projectile_speed'],
              'attack_rate' => $hero['attack_rate'],
              'move_speed' => $hero['move_speed'],
              'turn_rate' => $hero['turn_rate'],
              'cm_enabled' => $hero['cm_enabled'],
              'legs' => $hero['legs'],
              'pro_ban' => array_key_exists('pro_ban', $hero) ? $hero['pro_ban']:null,
              'hero_id' => array_key_exists('hero_id', $hero) ? $hero['hero_id']:null,
              'pro_win' => array_key_exists('pro_win', $hero) ? $hero['pro_win']:null,
              'pro_pick' => array_key_exists('pro_pick', $hero) ? $hero['pro_pick']:null,
              '7_pick' => array_key_exists('7_pick', $hero) ? $hero['7_pick']:null,
              '7_win' => array_key_exists('7_win', $hero) ? $hero['7_win']:null,
              '1_pick' => array_key_exists('1_pick', $hero) ? $hero['1_pick']:null,
              '1_win' => array_key_exists('1_win', $hero) ? $hero['1_win']:null,
              '8_pick' => array_key_exists('8_pick', $hero) ? $hero['8_pick']:null,
              '8_win' => array_key_exists('8_win', $hero) ? $hero['8_win']:null,
              '3_pick' => array_key_exists('3_pick', $hero) ? $hero['3_pick']:null,
              '3_win' => array_key_exists('3_win', $hero) ? $hero['3_win']:null,
              '6_pick' => $hero['6_pick'],
              '6_win' => $hero['6_win'],
              '2_pick' => $hero['2_pick'],
              '2_win' => $hero['2_win'],
              '4_pick' => $hero['4_pick'],
              '4_win' => $hero['4_win'],
              '5_pick' => $hero['5_pick'],
              '5_win' => $hero['5_win']
            ]);
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
