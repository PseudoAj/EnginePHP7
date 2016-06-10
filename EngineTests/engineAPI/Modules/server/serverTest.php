<?php
/*
* This is the testing class to make sure that all the
* functions in the server class are working perfectly.
*/

//Header section import all the files and create the object here
require_once '../../../../engine/engineAPI/latest/modules/templates/templates.php';
require_once '../../../../engine/engineAPI/latest/modules/server/server.php';
$serverObject = new server();

//Test for the methods
if($serverObject->cleanServerVars()){
  echo "Test passed\n";
}
