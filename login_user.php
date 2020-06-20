<?php

define('HOST', 'localhost');
define('USER', 'gunbladeii');
define('PASSWORD', 'Sh@ti5620');
define('DB', 'afms');







if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$username = $_POST['username'];
	$password = $_POST['password'];


	if($username == '' || $password == ''){
		echo "fail";
		exit;
	}




	
	$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");
	
	$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_array($result);

	if(isset($data)){
		echo "login";
	}else{
		echo "fail";
	}

	mysqli_close($con);
}



?>