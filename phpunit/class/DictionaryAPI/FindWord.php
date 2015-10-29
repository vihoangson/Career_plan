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
		$xdef = self::grab_xml_definition($word, "sd4", "fe121941-f0c7-4b4c-a43f-28a522f6e774");
		return simplexml_load_string($xdef);
	}
}
 ?>