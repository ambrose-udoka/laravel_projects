<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Club extends Model
{
   protected $primaryKey = 'club_id';
   protected $guarded = []; //

   public function getclubs(){
   	$clubs = DB::select("SELECT * FROM clubs");

   	return $clubs;
   }


   public function get_a_club($id){
   	$clubs = DB::select("SELECT * FROM clubs WHERE club_id=?", [$id]);

   	return $clubs;
   }

   public function insert_club($club_name, $club_stadium){
   	$club_insert = DB::table('clubs')->insert(
   		['club_name'=>$club_name, 'year_established'=>'2005-01-09', 'club_desc'=>'One love', 'city'=>'Miami', 'country_id'=>'4', 'stadium_name'=>$club_stadium, 'status'=>'promoted', 'club_logo'=>'Yes']);

   	return $club_insert;
   }
}
