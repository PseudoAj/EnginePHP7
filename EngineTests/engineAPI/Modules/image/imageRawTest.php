<?php
/*
* This is the testing class to make sure that all the
* functions in the image class are working perfectly.
*/


//Header section import all the files
require_once '../../../../engine/engineAPI/latest/modules/image/image.php';
$imageJPGObject = new image("./resources/testJpeg.jpg");
$imagePNGObject = new image("./resources/testPng.png");


//Test for the methods
//1. Test for the filename
$testFileName = $imageJPGObject->getFilename();
echo $testFileName."\n";

$testFileName = $imagePNGObject->getFilename();
echo $testFileName."\n";


//2. Test for the image
$testrawFile = $imageJPGObject->rawImage();

$testrawFile = $imagePNGObject->rawImage();


//3. Test for the output of the png and jpg
//$imageJPGObject->output();

//$imagePNGObject->output();


//4. get height and width
echo "Original File width and height\n Width: ".$imagePNGObject->getWidth()."\n height: ".$imagePNGObject->getHeight()."\n";

echo "Original File width and height\n Width: ".$imageJPGObject->getWidth()."\n height: ".$imageJPGObject->getHeight()."\n";


//5. Test for the resize to one dimension
$imagePNGObject->resizeToWidth(50);
echo "Resized Width File width and height\n Width: ".$imagePNGObject->getWidth()."\n height: ".$imagePNGObject->getHeight()."\n";
$imagePNGObject->resizeToHeight(50);
echo "Resized Height File width and height\n Width: ".$imagePNGObject->getWidth()."\n height: ".$imagePNGObject->getHeight()."\n";

$imageJPGObject->resizeToWidth(50);
echo "Resized Width File width and height\n Width: ".$imageJPGObject->getWidth()."\n height: ".$imageJPGObject->getHeight()."\n";
$imageJPGObject->resizeToHeight(50);
echo "Resized Height File width and height\n Width: ".$imageJPGObject->getWidth()."\n height: ".$imageJPGObject->getHeight()."\n";


#6. Test for scaling
$imagePNGObject->scale(10);
echo "scaled File width and height\n Width: ".$imagePNGObject->getWidth()."\n height: ".$imagePNGObject->getHeight()."\n";

$imageJPGObject->scale(12);
echo "Scaled File width and height\n Width: ".$imageJPGObject->getWidth()."\n height: ".$imageJPGObject->getHeight()."\n";


#7. Test for the resizing
$imagePNGObject->resize(50,50);
echo "Resized File width and height\n Width: ".$imagePNGObject->getWidth()."\n height: ".$imagePNGObject->getHeight()."\n";

$imageJPGObject->resize(50,50);
echo "Resized File width and height\n Width: ".$imageJPGObject->getWidth()."\n height: ".$imageJPGObject->getHeight()."\n";

?>
