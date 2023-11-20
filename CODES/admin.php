<?php 

  session_start();
  if(isset($_SESSION['admin'])){
    // header('location:admin.php');
  }
  elseif(isset($_SESSION['user'])){
    header('location:student.php');
  }
  elseif(!isset($_SESSION['admin'])){
    header('location:logoutadmin.php');
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
  
  
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="photo.css">
  
  <title>Administration</title>
</head>
<body>
    

<!-- SUST LOGO -->

<div class="head">
    <div class="container">
        <div class="card-header text-center">
          <a href="admin.php"> <img src="logo.png" alt="" height="100px" width="100px" style="opacity: 0.7;border-radius: 50%;"></a>
          <br><br>
          <h3><p style="color:cyan;text-align:center">SUST HALL</p></h3>
        </div>
      </div>
</div>

<div class="bgg">
    
    
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
                  <li class="nav-item">
                    <a class="nav-link" href="admin.php" style="font-size:20px;font-style: ;color: #ee85dd;text-decoration: none;">
                      <?php
                      // session_start();
                      if(isset($_SESSION['admin'])){
                        echo $_SESSION['admin'];
                      }
                     ?>
                    </a>
                  </li>
                </ul>
                <p style="color:white;font-size:20px"> <a href="admin.php" style="text-decoration:none;color:rgb(222, 72, 230);">Administration</a> </p>
              </div>
            </nav>
    
          </div>
        </div>


<!-- Admin -->
    
  <div class="container" style="background-color: #1d2834;text-align: ;margin-top:50px">
    <div style="border:1px solid white;width:60%;border-radius: 50px;margin: auto;padding: ;background-color: #228b22;">
      <p style="color: black;font-size: 25px;text-align: center;margin: auto;">Administration</p>
    </div>

  </div>

  
  
  

<!-- See -->
    <div class="container" style="background-color:;text-align: center;margin-top:50px">
      <p style="color: rgb(30, 227, 209);font-size: 25px;">See Results</p>
      <hr style=" width: 40%;margin-left: auto;margin-right: auto;border-top:1px solid white;">
    </div>  
    <div class="container">
      <p style="text-align:center;font-size:20px;"> <a href="seatapplicant.php" style="color:white;text-decoration: none;">Seat Applicants</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="leavingapplicants.php" style="color:white;text-decoration: none;">Leaving Applicants</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="complains.php" style="color:white;text-decoration: none;">Complains</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="studentid.php" style="color:white;text-decoration: none;">Students Identity</a> </p>
      


<!-- modification -->
    <div class="container" style="background-color:;text-align: center;margin-top:50px">
      <p style="color: rgb(30, 227, 209);font-size: 25px;">ADD</p>
      <hr style=" width: 40%;margin-left: auto;margin-right: auto;border-top:1px solid white;">
      <p style="text-align:center;font-size:20px;"> <a href="addhall.php" style="color:white;text-decoration: none;">Add Hall</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="updatehall.php" style="color:white;text-decoration: none;">Update Hall</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="addstudent.php" style="color:white;text-decoration: none;">Add Student</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="addnotice.php" style="color:white;text-decoration: none;">Add Notice</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="addlogin.php" style="color:white;text-decoration: none;">Add Login Credential</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="addcontact.php" style="color:white;text-decoration: none;">Add Contact</a> </p>
    </div>
    <div class="container" style="background-color:;text-align: center;margin-top:50px">
      <p style="color: rgb(30, 227, 209);font-size: 25px;">DELETE</p>
      <hr style=" width: 40%;margin-left: auto;margin-right: auto;border-top:1px solid white;">
      </div>
      <p style="text-align:center;font-size:20px;"> <a href="deletestudent.php" style="color:white;text-decoration: none;">Delete Student</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="deleteseatapplicant.php" style="color:white;text-decoration: none;">Delete Seat Applicant</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="deleteleaveapplicant.php" style="color:white;text-decoration: none;">Delete Leave Applicant</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="deletecomplain.php" style="color:white;text-decoration: none;">Delete Complains</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="deletelogin.php" style="color:white;text-decoration: none;">Delete Log In Credential</a> </p>
    </div>

<!-- history -->
    <div class="container" style="background-color:;text-align: center;margin-top:50px">
      <p style="color: rgb(30, 227, 209);font-size: 25px;">Archive</p>
      <hr style=" width: 40%;margin-left: auto;margin-right: auto;border-top:1px solid white;">
      <p style="text-align:center;font-size:20px;"> <a href="arccomplain.php" style="color:white;text-decoration: none;">Complains</a> </p>
      <p style="text-align:center;font-size:20px;"> <a href="arcstudent.php" style="color:white;text-decoration: none;">Student Identity</a> </p>
    </div>


    <br><br>
    <div class="container" style="width:20%;border-radius: 50px;border: 1px solid black;background-color: darkmagenta;">
        <p style="text-align:center;font-size:20px;background-color: darkmagenta;margin: auto;"><a href="logoutadmin.php" style="text-decoration:none;color:black;">Log Out</a></p>
    </div>

    <br>
</div>
  
<!-- COPYRIGHT -->
    <div class="container">
      <hr style="border-top: 1px solid white;margin-top:50px">
      <div class="copyright">
        <p style="color:rgb(236, 151, 197);text-align:center">&#169 SUST HALL AUTHORITIES.All Rights Reserved.</p>
      </div>
    </div>
  

</body>
</html>