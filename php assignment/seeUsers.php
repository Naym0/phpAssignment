<?php
	require_once 'connection.php';
	
	//query db
	$RS = $mysqli->query("SELECT * FROM users");
	
	//count returned rows
	if($RS->num_rows !=0){
		while($rows = $RS->fetch_assoc())
		{
			$userId = $rows['userId'];
			$Full_Name = $rows['Full_Name'];
			$email = $rows['email'];
			$phone_Number = $rows['phone_Number'];
			$User_Name = $rows['User_Name'];
			$Password = $rows['Password'];
			$UserType = $rows['UserType'];
			$Address = $rows['Address'];
			
			echo "<p> UserId: $userId<br/> Name: $Full_Name<br/> Email: $email<br/> Number: $phone_Number<br/> Username: $User_Name<br/> Password: #hidden<br/> UserType: $UserType<br/> Address: $Address</p>";
		}
	}else{
		echo "No results";
}
?>