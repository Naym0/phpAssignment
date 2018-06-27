<?php
		require_once 'Connection.php';
		
		$Id = $mysqli->real_escape_string($_REQUEST['Id']);
	
	// Check connection
	if($mysqli === false){
		die("ERROR: Could not connect. " . $mysqli->connect_error);
	}
	
	// attempt insert query execution
	$sql = "DELETE from users WHERE 'userId' = $Id";

	if($mysqli->query($sql) === true){
		echo "Record deleted successfully.";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
?>
	
