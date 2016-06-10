<?php
class engineDBTest extends PHPUnit_Framework_TestCase {
	
	public function setup() {
		$this->engineDB = new engineDB();
	}

	public function teardown() {
		unset($this->engineDB);
	}

	
}

?>