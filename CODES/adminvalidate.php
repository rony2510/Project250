<?php

session_start();

$con=mysqli_connect('localhost','root','','hall');


$email=$_POST['email'];
$pass=$_POST['password'];


$sql="SELECT * FROM admin WHERE email='$email' && password='$pass'";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['admin']=$email;
  header('location:admin.php');
}
else{
  header('location:adminlogin.php');
}

 ?>