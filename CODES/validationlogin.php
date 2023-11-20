<?php

session_start();

$con=mysqli_connect('localhost','root','','hall');


$email=$_POST['email'];
$pass=$_POST['password'];


$sql="SELECT * FROM login WHERE email='$email' && password='$pass'";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['user']=$email;
  header('location:student.php');
}
else{
  header('location:login.php');
}


 ?>