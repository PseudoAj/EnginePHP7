<?php
require_once 'testClass.php';
//require_once 'PHPUnit.php';

$testSuite=new PHPUnit_TestSuite("StringTest");
$res=PHPUnit::run($testSuite);

echo $res->toString();
?>