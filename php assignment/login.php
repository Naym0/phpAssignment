<?php 
	require_once ('connection.php') ;
	session_start();
	
	if(array_key_exists("button", $_POST)AND isset ($_POST['button'])){
		$error = "";
		$userId= $mysqli->real_escape_string($_POST['userId']);	
		$password= $mysqli->real_escape_string($_POST['uPass']);
		
		$query= "SELECT `userId`,`Password`,`UserType` FROM `users` WHERE `userId` = '$userId';";
		$result= $mysqli->query($query) OR  die($mysqli->error);
		
		if($result->num_rows >0){
			$row= $result->fetch_array();
			$saved_pass= $row['Password'];
			
			if($saved_pass == $password){
				//create session id
				$_SESSION['id']=$row['userId'];
				
				$type=$row['UserType'];
				if($type == "SuperUser"){
					header("Location: superUser.html");
					$_SESSION['msg']="Welcome";
				}else if($type == "Admin"){
					header("Location: Admin.html");
					$_SESSION['msg']="Welcome";
				}else{
					$error.="<p> No Allowance </p>";
				}
			}else{
				$error.= "<p> Wrong Password</p>";
			}
		}else{
			$error.="<p>Wrong username</p>";
		}
	}	
?>