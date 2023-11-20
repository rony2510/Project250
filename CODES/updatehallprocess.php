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

    $sql="update hall set name='$name',detail='$detail' where name='$name'";

    if ($conn->query($sql) === TRUE) {
      header('location:updatehall.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

