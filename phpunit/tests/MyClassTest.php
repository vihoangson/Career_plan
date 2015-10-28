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
		$user = self::userMockery("mail@cybridge.jp","adfasdf");
		$this->assertTrue(is_array($user->getUsername()),"Is not array");
	}

	public function tes_tStub()
	{
        // Create a stub for the SomeClass class.
		$stub = $this->getMockBuilder('sfgsdfgdf')
		->setMethods(array('update'))
		->getMock();

		$stub->method('update')
		->willReturn('foo33');
        // Configure the stub.
		$stub->method('doSomething')
		->willReturn('foo');
		$stub->method('doSomething2')
		->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
		$this->assertEquals('foo', $stub->update());
	}
}

 ?>