<?php  
  session_start();

 ?>
  <?php

    $server="localhost";
    $user="root";
    $password="";
    $dbname="hall";


    $conn=mysqli_connect($server,$user,$password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

  
    $com=$_POST['complain'];
    $date=date("Y-m-d");


    if(isset($_SESSION['user'])){
      $emai=$_SESSION['user'];
    }
    
    $sql1="SELECT id,name,email,hall,room FROM student WHERE email='$emai'";
    $run=$conn->query($sql1);
    if($run->num_rows>0){

      while($row=$run->fetch_assoc()){
        $id=$row["id"];
        $name=$row["name"];
        $email=$row["email"];
        $hall=$row["hall"];
        $room=$row["room"];


      $sql="insert into complain(name,email,hall,room,date,complain) values('$name','$emai','$hall','$room','$date','$com')";
      $sql1="insert into complainhistory(name,email,hall,room,date,complain) values('$name','$emai','$hall','$room','$date','$com')";
      // $run=mysqli_query($conn,$query);

      if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
        header('location:complain.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    }

    }

   ?>