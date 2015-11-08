<?php
namespace CareerPlan\DictionaryAPI;
/**
* 
*/
class FindWord
{
	// This function grabs the definition of a word in XML format.
	static function grab_xml_definition ($word, $ref, $key)
	{	$uri = "http://www.dictionaryapi.com/api/v1/references/" . urlencode($ref) . "/xml/" . 
					urlencode($word) . "?key=" . urlencode($key);
		return file_get_contents($uri);
	}


	function api_english($word){
		if(!$word) return false;
		$xdef = self::grab_xml_definition($word,  "learners", "8d097dd0-9e82-4484-abf9-404a999e3c1b");
		return simplexml_load_string($xdef);
	}
}
 ?>