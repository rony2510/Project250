<?php

session_start();

$con=mysqli_connect('localhost','root','','hall');


$email=$_POST['email'];
$pass=$_POST['password'];
$pass1=$_POST['confirmpassword'];


$sql="SELECT * FROM login WHERE email='$email' && password='$pass'";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['user']=$email;
  echo "Already Registered!";
  header('location:login.php');
}
else{
  if($pass==$pass1){
    $reg="insert into login(email,password) values('$email','$pass')";
    mysqli_query($con,$reg);
    header('location:login.php');
  }
  else{
    header('location:register.php');
  }
}


 ?>