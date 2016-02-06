<?php 
	require_once("connection.php");
	session_start();
	$form = $_GET['q'];
	if($form == "login") {
		$username = $_POST['login-username'];
		$password = $_POST['login-password'];
        echo "username! ----" . $uusername. "<br>";
        echo "password! ----".  $upassword. "<br>";
        print_r $_POST;
		//if(checkLogin($username, $password)){
        //checkLogin($username, $password);
		/*if($username == "admin" && $password == "1234"){
			// Successfully login
			$_SESSION['username'] = $username;
			header("location:welcome.php");
		}else {
			header("location:index.php?login=error");
		}*/
		
	}else if($form == "logout") {
	    session_destroy();

	    header("location:index.php");
	}
?>