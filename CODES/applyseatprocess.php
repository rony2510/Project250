
  <?php

    $server="localhost";
    $user="root";
    $password="";
    $dbname="hall";


    $conn=mysqli_connect($server,$user,$password,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $nam=$_POST['name'];
    $emai=$_POST['email'];
    $dept=$_POST['dept'];
    $reg=$_POST['registration'];
    $hal=$_POST['hall'];

    $sql="insert into applyseat(name,email,department,registration,hall) values('$nam','$emai','$dept','$reg','$hal')";
    // $run=mysqli_query($conn,$query);

    if ($conn->query($sql) === TRUE) {
      header('location:applyseat.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

