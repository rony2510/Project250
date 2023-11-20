<?php 

  session_start();//start session
    if(isset($_SESSION['admin'])){//check this 
      header('location:admin.php');//redirects to admin.php
  }
 ?>
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


  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="photo.css">


  <title>SUST Student Resident</title>

</head>
<body>

<!-- SUST LOGO -->
<div class="head">
    <div class="container">
        <div class="card-header text-center">
          <a href="home.php"> <img src="logo.png" alt="" height="100px" width="100px" style="opacity: 0.7;border-radius: 50%;"></a>
          <br><br>
          <h3><p style="color:cyan;text-align:center">SUST HALL</p></h3>
        </div>
      </div>
</div>


<div class="bghome">
<!-- LINKS -->
  <div class="container">
    <div class="card my-auto">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
         aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarSupportedContent" style>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php"><p style="font-size:20px;">Home</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"><p style="font-size:20px;">Log In</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="applyseat.php"><p style="font-size:20px;">Apply for a Seat</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notice.php"><p style="font-size:20px;">Notice</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><p style="font-size:20px;">Contact</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student.php" style="font-size:20px;color: #ee85dd;text-decoration: none;">
                <?php
                if(isset($_SESSION['user'])){
                  echo $_SESSION['user'];// if any user is logged in it shows users identity
                }
               ?>
              </a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>

  
<!-- HALL DETAILS -->
  <div class="container" style="background-color: #1d2834;text-align: ;margin-top:50px">
    <div style="border:1px solid white;width:60%;border-radius: 50px;margin: auto;padding: ;background-color: #228b22;">
      <p style="color: black;font-size: 25px;text-align: center;margin: auto;">STUDENT RESIDENTS</p>
    </div>
  </div>
  
  <br>
  
  <?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hall";

    $conn=mysqli_connect($servername,$username,$password,$dbname);//connects to database
    $sql="SELECT id,name,detail FROM hall";// select from database

    $run=$conn->query($sql);

    if($run->num_rows>0) {
      
      while($row=$run->fetch_assoc()) {
        
        $id=$row["id"];
        $name=$row["name"];
        $detail=$row["detail"];


        echo  "<div class='container'>
                  <div id='accordion' style='text-align: center;'>
                    <div class='card-header'>
                      <a class='collapsed card-link' data-toggle='collapse' href='#collapse$id'>
                        <p style='font-size: 20px;color: white;'>$name</p>
                      </a>
                    </div>
                    <div id='collapse$id' class='collapse' data-parent='#accordion'>
                      <div class='card-body' style='background-color: cyan;'>
                      <!-- details of hall -->
                      $detail
                      </div>
                    </div>
                  </div>
              </div>" ;
          
      }
     
    }
    else{
      echo "0 results";
    }

   ?>



<br><br><br>

  <!-- Vacancy -->
  <div class="container">
      <b style="text-align:center;color:black;font-size: 20px;font-style: ;" data-toggle="tooltip" title="<?php 
                $con=mysqli_connect('localhost','root','','hall');
                $sql="SELECT * FROM student WHERE hall='Shah Paran Hall' || hall='Bangabandhu Sheikh Mujibur Rahman Hall' || hall='Syed Mujtaba Ali Hall'";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                echo 1500-$num; ?>">male vacant</b>
   <br>
      <b style="text-align:center;color:black;font-size:20px;font-style: ;" data-toggle="tooltip" title="<?php $con=mysqli_connect('localhost','root','','hall');
                $sql="SELECT * FROM student WHERE hall='Shahid Jononi Jahanara Imam Hall' || hall='Begum Sirajunnesa Chowdhury Hall'";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                echo 1000-$num; ?>">female vacant</b>
    
  </div>
    <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>

<br>

</div>


<!-- COPY RIGHT -->
      <div class="container">
        <hr style="border-top: 1px solid white;margin-top:50px">
        <div class="copyright">
          <p style="color:rgb(236, 151, 197);text-align:center">&#169 SUST HALL AUTHORITIES.All Rights Reserved.</p>
        </div>
      </div>


      <p style="color:white;font-size:20px;text-align:center;"> <a href="admin.php" style="text-decoration:none;color:rgb(222, 72, 230);">Administration</a> </p>

</body>
</html>