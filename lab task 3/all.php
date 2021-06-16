<?php

$data = file_get_contents("data.json");
$mydata = json_decode($data);

 /*foreach($mydata as $myobject)
	 {
		foreach($myobject as $key=>$value)
		{
			echo "your ".$key." is ".$value."<br>";
		} 
	 } */

	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	
?>