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
    $designation=$_POST['designation'];
    $number=$_POST['number'];
    $hall=$_POST['hall'];
    
    $sql="insert into contact(name,designation,number,hall) values('$name','$designation','$number','$hall')";

    if ($conn->query($sql) === TRUE) {
      header('location:addcontact.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   ?>

