<?php
	$hostname = "localhost:3306";
	$username = "root";
	$password = "Koolkat1";
	$dbname = "ite220_userinfo";

	$conn = new mysqli($hostname, $username, $password, $dbname);
	if ($conn->connect_error) {
		die($conn->connect_error);
	}
	/*else {
		echo "connected";
	}*/
	function checklogin($uusername, $upassword){
		global $conn;
		$query = "SELECT * FROM users";
		$result = $conn->query($query);
		if (!$result) {
			die($conn->error);
		}
		while ($row=mysqli_fetch_array($result)) {
			echo "username". " ". $row["username"]. "<br>";
			echo "password". " ". $row["password"]. "<br>";
            echo "username ----" . $uusername. "<br>";
            echo "password ----".  $upassword. "<br>";
			if ($uusername == $row["username"] && md5($upassword) == $row["password"]) {
				//return true;
			}

		}
		//return false;
	}


?>