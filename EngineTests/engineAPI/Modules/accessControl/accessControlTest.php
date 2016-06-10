<?php
//Test cases for accessControl class in engineAPI
class accessControlTest extends PHPUnit_Framework_TestCase{
	public function setup() {
		$this->accessControl = new accessControl();
	}

	public function teardown() {
		unset($this->accessControl);
	}

	public function testListACLs() {
		$this->assertTrue($this->accessControl->listACLs());
	}

}

?>