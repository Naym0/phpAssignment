
<?php
	
include ('constant.php');

$mysqli = new mysqli($host_name, $DB_User, $Password, $DB_Name);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
} 

 

?>
