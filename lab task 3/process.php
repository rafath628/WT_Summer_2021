<?php
$validateall="";

if($_SERVER["REQUEST_METHOD"]== "POST")
{
	$Ename=$_REQUEST["Ename"];
	$Eid=$_REQUEST["Eid"];
	$email=$_REQUEST["email"];
	$date=$_REQUEST["date"];
	$Address=$_REQUEST["Address"];
	$State=$_REQUEST["State"];
	$Country=$_REQUEST["Country"];
	$Phone=$_REQUEST["Phone"];

	if(empty($Ename) || empty($Eid) || empty($email) || empty($date) || empty($Address) || empty($State) || empty($Country) || empty($Phone))
	{
		$validateall="You Have To Fill up all the Components ";
	}
	   

	else 
	{

		
		//Get form data
		$formdata = array(
			'Ename'=> $_POST["Ename"],
			'Eid'=> $_POST["Eid"],
			'email'=>$_POST["email"],
			'date'=> $_POST["date"],
			'Address'=> $_POST["Address"],
			'State'=>$_POST["State"],
			'Country'=>$_POST["Country"],
			'Phone'=> $_POST["Phone"]
		);
				
		$existingdata = file_get_contents('data.json');
		$tempJSONdata = json_decode($existingdata);
		$tempJSONdata [] = $formdata;
		//Convert updated array to JSON
		$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
		
		//write json data into data.json file
		if(file_put_contents("data.json", $jsondata)) 
			{
				echo "Data successfully saved <br>";
			}
		else 
				echo "no data saved";
				
		$data = file_get_contents("data.json");
		$mydata = json_decode($data);


		/*foreach($mydata as $myobject)
		{
			foreach($myobject as $key=> $value )
			{
				echo "your ".$key." is ".$value."<br>";
			} 
		}*/

		
	}
}
	
?>
<!DOCTYPE html>
	<html>
	<body>
	

	<br/>
	<h5> To see the employee information click on <a href="all.php">View All</a></h5>


	</body>
	</html>
