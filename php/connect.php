<?php

    
if(isset($_POST['login']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","education");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    @mysqli_select_db("education",$conn);
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $result=mysqli_query($conn,"SELECT useremail,password FROM register where useremail='$email' and password='$password' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
             
        }
        else 
        {
          header("location:alcourses.html");
          
        }
    }                
}




if(isset($_POST['signup'])){
    $con=mysqli_connect('localhost','root','','education');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $u_name=$_POST['username'];
        $u_email=$_POST['useremail'];
        $u_pass=$_POST['password'];
       $reg="insert into register values('$u_name','$u_email','$u_pass')";
        @mysqli_select_db("education");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
		
    }
    }
}


if(isset($_POST['pay'])){
    $con=mysqli_connect('localhost','root','','education');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
       $reg="insert into payment values('$name','$email','$mobile','$address')";
        @mysqli_select_db("education");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:pay.php");
		
    }
    }
}



?>