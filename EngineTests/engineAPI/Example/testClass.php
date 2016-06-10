<?php
//load the required classes
require_once 'string.php';
//require_once 'PHPUnit.php';

class StringTest extends PHPUnit_Framework_TestCase
{
	//object for testing
	private $test;

	//create a setup class
	function setUp()
	{
		//initialize the string
		$this->test=new String("test");
	}

	//explain what to do when you are done with it
	function tearDown()
	{
		//delete
		unset($this->test);
	}

	//create the test #2 for copy
	function testCopy()
	{
		$testCopy=$this->test->copy();
		$this->assertEquals($testCopy,$this->test);
	}



}
?>