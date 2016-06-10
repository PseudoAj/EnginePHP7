<?php

class Pop
{
	public function foo($var)
	{
		return array_pop($var);
	}

	function array_getFirstIndex() 
	{
		$array  = array("a" => "this", "b" => "that", "c" => "another", "d" => "this", "e" => "something", "f" => "else");
   	 	if (is_array($array) && count($array) > 0) 
   	 	{
   	 		$keys=array_keys($array);
       	 	return(array_shift($keys));
    	}
    
    	return(FALSE); 
	}

}

?>
