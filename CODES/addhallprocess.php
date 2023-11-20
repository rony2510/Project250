  <?php

    $server="localhost";
    $user="root";
    $password="";
    $dbname="hall";


    $conn=mysqli_connect($server,$user,$password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $name=$_POST['name'];
    $detail=$_POST['detail'];
    // $date=date("Y-m-d");

    $sql="insert into hall(name,detail) values('$name','$detail')";

    if ($conn->query($sql) === TRUE) {
      header('location:addhall.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>
