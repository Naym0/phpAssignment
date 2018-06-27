	
	<?php
		
		require_once 'Connection.php';
		
	$mysqli = new mysqli("localhost", "root", "", "assignment");
	
	// Check connection
	if($mysqli === false){
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}

	$t=date_create()->format("Y-m-d H:i:s");
	// Escape user inputs for security
	$userId = $mysqli->real_escape_string($_REQUEST['userId']);
	$name = $mysqli->real_escape_string($_REQUEST['name']);
	$email = $mysqli->real_escape_string($_REQUEST['email']);
	$number = $mysqli->real_escape_string($_REQUEST['number']);
	$name = $mysqli->real_escape_string($_REQUEST['name']);
	$uPass = $mysqli->real_escape_string($_REQUEST['uPass']);
	$uType = $mysqli->real_escape_string($_REQUEST['uType']);
	$address = $mysqli->real_escape_string($_REQUEST['address']);
	$image = $mysqli->real_escape_string('image/'.$_Files['image']['name']);
	
 
	// attempt insert query execution
	$sql = "INSERT INTO users (userId,Full_Name,email,phone_Number,User_Name,Password,UserType,Address,Image,AccessTime) VALUES ('$userId','$name','$email','$number','$name','$uPass','$uType','$address','$image','$t')";

	if($mysqli->query($sql) === true){
		echo "Records inserted successfully.";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
 
	// Close connection
	$mysqli->close();
?>
