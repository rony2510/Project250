<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- BOOTSTRAP 4 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- <link rel="stylesheet" href="seatapplicant.css"> -->
  <link rel="stylesheet" type="text/css" href="seatapplicants.css">

  <title>Leaving Applicants</title>
</head>
<body>


  <div class="container">
    <p style="text-align:center;color:darkcyan;font-size: 30px;">Hall Leaving Applicants</p>
    <p style="text-align:right;">
      <a href="admin.php" style="font-size:20px;font-style: ;color: #ee85dd;text-decoration: none;">
          <?php
            session_start();
            if(isset($_SESSION['admin'])){
            echo $_SESSION['admin'];
          }
          elseif(!isset($_SESSION['admin'])){
            header('location:logout.php');
          }
        ?>
      </a> 
    </p>
  </div>

  <?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hall";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT id,name,email,hall,room,date FROM applyleave";

    $run=$conn->query($sql);

    if($run->num_rows>0) {
      
      echo "<table><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>HALL</th><th>ROOM</th><th>DATE</th></tr>";
      while($row=$run->fetch_assoc()) {

        
        $id=$row["id"];
        $name=$row["name"];
        $email=$row["email"];
        $hall=$row["hall"];
        $room=$row["room"];
        


        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["hall"] . "</td><td>" . $row["room"] . "</td><td>" . $row["date"] . "</td></tr>";
        
      }
      echo "</table>";
    }
    else{
      echo "0 results";
    }



   ?>
   <br><br><br><br>
   <p style="text-align:center;font-size: 20px;"> <a href="admin.php" style="text-decoration:none;color:white;"><b>Back</b></body></a> </p>
</body>
</html>
