<?php 

  session_start();
  if(!isset($_SESSION['user'])){ 
    header('location:logout.php');
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


  <title><?php echo $_SESSION['user']; ?></title>

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
            <li class="nav-item active">
              <a class="nav-link" href="home.php"><p style="font-size:20px;">Home</p></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="login.php"><p style="font-size:20px;">Log In</p></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="register.php"><p style="font-size:20px;">Sign Up</p></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="applyseat.php"><p style="font-size:20px;">Apply for a Seat</p></a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="notice.php"><p style="font-size:20px;">Notice</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><p style="font-size:20px;">Contact</p></a>
            </li>
            
          </ul>
          
          <p style="color:white;font-size:20px">
            <a class="nav-link" href="student.php" style="font-size:;color: #ee85dd;text-decoration: none;">
                <?php
                if(isset($_SESSION['user'])){
                  echo $_SESSION['user'];
                }
               ?>
            </a>
          </p>
        </div>
      </nav>

    </div>
  </div>


<!-- main body -->
  <div class="container">

    <div class="container" style="background-color: #1d2834;text-align: ;margin-top:50px">
    <div style="border:1px solid white;width:60%;border-radius: 50px;margin: auto;padding: ;background-color: #228b22;">
      <p style="text-align:center;font-size: 25px;color: black;background-color: ;width: ;margin: auto;"> <?php echo $_SESSION['user']; ?> </p>
    </div>

    </div>
    

    <br>

     <p style="text-align:center;font-size:30px;"> <a href="complain.php" style="color:white;text-decoration: none;">&#8226;  Complain</a> </p>
        <p style="text-align:center;font-size:30px;"> <a href="applyleave.php" style="color:white;text-decoration: none;">&#8226;  Apply for Leaving Hall</a> </p>
        

        <br><br><br>

      <div class="container" style="width:20%;border-radius: 50px;border: 1px solid black;background-color: darkmagenta;">
        <p style="text-align:center;font-size:20px;background-color:;margin: auto;"><a href="logoutadmin.php" style="text-decoration:none;color:black;">Log Out</a>
        </p>
      </div>

  </div>
  <br>
</div>

  


<!-- COPY RIGHT -->

      <div class="container">
        <hr style="border-top: 1px solid white;margin-top:50px">
        <div class="copyright">
          <p style="color:rgb(236, 151, 197);text-align:center">&#169 SUST HALL AUTHORITIES.All Rights Reserved.</p>
        </div>
      </div>
</body>
</html>
