<?php

session_start();
header('location:home.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo"no connection";
}

mysqli_select_db($con, 'userregistration');


$email = $_POST['email'];
$pass =  $_POST['password'];

$q = "select * from sign where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['email'] = $email;
	header('location:home.php');
	# code...
}else{
	 header('location:login.php');
	mysqli_query($con, $qy);
	echo" Registration successful";
}

?>