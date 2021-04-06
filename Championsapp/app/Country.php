<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Country extends Model
{
    protected $primaryKey = 'country_id';
    public $timestamps = false; // if you don't need to insert created at or updated at automatically
    //
    	protected $guarded = []; 

    	//
    	public static function get_countries{
$result = DB::select('select * from countries');

return $result;
}
}
