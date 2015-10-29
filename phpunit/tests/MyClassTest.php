<?php
use CareerPlan\MyClass;
use CareerPlan\MyClassMock;
/**
 * MyClassTest
 *
 * @group group
 */
class MyClassTest extends PHPUnit_Framework_TestCase
{
	private $myclass;
	public function setUp()
	{
		$this->myclass = new MyClass;
	}

	public function testFunction1(){
		$this->assertEquals($this->myclass->function1(), "string", 'message');
	}

	public function userMockery($demoEmail,$demoUsername){
		$user = Mockery::mock('santo');
		$user->shouldReceive('getEmail')->once()->andReturn($demoEmail);
		$user->shouldReceive('getUsername')->once()->andReturn($demoUsername);
		return $user;
	}

	public function testUserEmail(){
		//$user = self::userMockery("mail@cybridge.jp","Mr.Santo");
		$user = self::userMock("mail@cybridge.jp","Mr.Santo");
		$this->assertEquals($user->getUsername(), "Mr.Santo");
		$this->assertEquals($user->getEmail(), "mail@cybridge.jp");
	}

	public function userMock($demoEmail,$demoUsername)
	{
		$user = $this->getMockBuilder('SantoSan')
				->setMethods(array('getUsername','getEmail'))
				->getMock();
		$user->method('getUsername')
			->willReturn($demoUsername);
		$user->method('getEmail')
			->willReturn($demoEmail);
		return $user;
	}
}

 ?>