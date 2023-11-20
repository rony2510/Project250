  <?php

    $server="localhost";
    $user="root";
    $password="";
    $dbname="hall";


    $conn=mysqli_connect($server,$user,$password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $notice=$_POST['notice'];
    $date=date("Y-m-d");

    $sql="insert into notice(notice,date) values('$notice','$date')";

    if ($conn->query($sql) === TRUE) {
      header('location:addnotice.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

