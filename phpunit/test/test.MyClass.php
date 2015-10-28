<?php
require "../autoload.php";
/**
 * MyClassTest
 *
 * @group group
 */
class MyClassTest extends PHPUnit_Framework_TestCase
{
	function testfunction1(){
		$mc = new Myalasdkfjasdl\MyClass;
    	$this->assertEquals($mc->function1(), "string");
	}

	function testfunction2(){
		$mc = new Myalasdkfjasdl\MyClass;
    	$this->assertFalse($mc->function2());
	}



}

 ?>