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

	// attempt insert query execution
	$sql = "UPDATE users where 'userId' = $userId";
	
	if($mysqli->query($sql) === true){
	echo "Records updated successfully.";
	} 
	else{
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
 

?>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<nav>
		<li> <a href="Uprofile.php">Update Profile</a> </li> 
		<li> <a href="UManage.html">Manage Students</a> </li> 
		<li> <a href="index.php">Logout</a> </li> <br><br><br>
	</nav>
	
<form name="php1" action="Uprofile.php"  enctype="multipart/form-data"  style="background-color: pink;" method="post">
	<fieldset>
		<legend> Add a new user </legend>
	User ID:
	<input type="text" name="userId" required><br><br>
	Full Name:
	<input type="text" name="name" required><br><br>
	Email:
	<input type="text" name="email" required><br><br>
	Phone Number:
	<input type="text" name="number" required><br><br>
	User Name:
	<input type="text" name="uName" required><br><br>
	Password:
	<input type="password" name="uPass" required><br><br>
	User Type:
	<input type="text" name="uType" required><br><br>
	Address:
	<input type="text" name="address" required><br><br>
    Image:
    <input type="file" name="image" id="fileToUpload"><br><br>
	<input type="submit" value="Update" name="update">
</form>
	</fieldset><br><hr>
</body>
</html>