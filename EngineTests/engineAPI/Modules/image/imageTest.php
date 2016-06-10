<?php


class imageTest extends PHPUnit_Framework_TestCase {

  public function setup(){
    $this->image = new image(testJpeg.jpg);
  }

  public function teardown(){
    unset($this->image);
  }



}
 ?>
