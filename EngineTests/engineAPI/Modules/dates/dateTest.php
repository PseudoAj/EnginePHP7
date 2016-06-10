<?php
class dateTest extends PHPUnit_Framework_TestCase {
/**
* Note the Month, Day and Year are specific to test; values should be changed
*when you run the test again.
*/
	public function setup() {
		$this->date = new date();
	}

	public function teardown() {
		unset($this->date);
	}

	public function test_getCurrentMonth() {
		$this->assertEquals("4",$this->date->getCurrentMonth());
	}

	public function test_getCurrentYear() {
		$this->assertEquals("2016",$this->date->getCurrentYear());
	}

	public function test_getCurrentDay() {
		$this->assertEquals("26",$this->date->getCurrentDay());
	}

	public function test_getCurrentHour() {
		$this->assertEquals("11",$this->date->getCurrentHour());
	}

	public function test_getCurrentMinute() {
		$this->assertEquals("54",$this->date->getCurrentMinute());
	}
}
?>
