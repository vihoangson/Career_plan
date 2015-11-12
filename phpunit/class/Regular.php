<?php 
namespace CareerPlan;
/**
* 
*/
class Regular
{
	public static function get_all_link($string){
		preg_match_all("/[\"\']((http:\/\/|https:\/\/).+?(\.jpg))[\"\']/",$string,$return,true );
		return $return;
	}
}

?>