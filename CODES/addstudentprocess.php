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
    $room=$_POST['room'];

    $sql="insert into student(name,email,department,registration,hall,room) values('$nam','$emai','$dept','$reg','$hal','$room')";
    $sql1="insert into studentarchive(name,email,department,registration,hall,room) values('$nam','$emai','$dept','$reg','$hal','$room')";
    // $run=mysqli_query($conn,$query);

    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
      header('location:addstudent.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

