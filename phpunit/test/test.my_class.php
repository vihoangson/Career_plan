<?php 
require "../MyClass.php";	
/**
 * MyClassTest
 *
 * @group group
 */
class MyClassTest extends PHPUnit_Framework_TestCase
{
	function test1(){
		$mc = new MyClass;
    	$this->assertEquals($mc->doClass(), "string");
	}

	function test2(){
		$mc = new MyClass;
    	$this->assertFalse($mc->getClass());
	}
	
}

 ?>