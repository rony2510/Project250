  <?php

    $server="localhost";
    $user="root";
    $password="";
    $dbname="hall";


    $conn=mysqli_connect($server,$user,$password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    
    $emai=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into login(email,password) values('$emai','$password')";
    
    // $run=mysqli_query($conn,$query);

    if ($conn->query($sql) === TRUE) {
      header('location:addlogin.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

