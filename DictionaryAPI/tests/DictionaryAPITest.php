<?php 
require "../autoload.php";
use CareerPlan\DictionaryAPI\FindWord;
/**
 * DictionaryAPITest
 *
 * @group group
 */
class DictionaryAPITest extends \PHPUnit_Framework_TestCase
{
	public $fw;
	public function setUp()
	{
		$this->fw = new FindWord;
	}

	function testFindWord(){
		$word = $this->fw->api_english("test")->entry->hw;
		$this->assertEquals($word, "test");
	}

}

 ?>