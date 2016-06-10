<?php
class String
{
	//The data associated with the class
	var $data;

	//constructor
	function String($data)
	{
		$this->data=$data;
	}

	//creates a deep copy of the string object
	function copy()
	{
		$ret=new String($this->data);
		return $ret;
	}

}
?>