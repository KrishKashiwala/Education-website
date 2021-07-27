<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');
if(!$con){
	echo" connection failed";
}

mysqli_select_db($con, 'userregistration');


$name =$_POST['name'];
$email =  $_POST['email'];
$pass = $_POST['password'];



$q = "select * from signin where name = '$name' && email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicate data";
	# code...
}else{
	 $qy= "INSERT INTO signin(name, email, password) VALUES ('$name', '$email', '$pass')";
	mysqli_query($con, $qy);
	echo" Registration successful";
}

?>