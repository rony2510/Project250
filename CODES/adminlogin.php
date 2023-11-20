<?php 
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:admin.php');
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


  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="photo.css">
  <link rel="stylesheet" type="text/css" href="header.css">


  <title>Admin</title>
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
              
            </ul>
            <p style="color:white;font-size:20px"> <a href="admin.php" style="text-decoration:none;color:rgb(222, 72, 230);">Administration</a> </p>
          </div>
        </nav>

      </div>
    </div>


<!-- main -->
  <div class="container" style="background-color: #1d2834;text-align: ;margin-top:50px">
    <div style="border:1px solid white;width:60%;border-radius: 50px;margin: auto;padding: ;background-color: #228b22;">
      <p style="color: black;font-size: 25px;text-align: center;margin: auto;">Administration</p>
    </div>
    
  </div>
  
  <br>
<!-- LOG IN  -->


  <div class="container">
    <div class="row justify-content-center">
      <div class="card my-auto shadow" style="width:300px;" id="phot">

        <div class="card-header text-center">
          <h4>Log In</h4>
        </div>
        <div class="card-body">
          <form action="adminvalidate.php" method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" value="" placeholder="Enter Password">
            </div>
            <br>
            <input type="submit" name="" value="Log In" class="btn btn-primary w-100">
          </form>
        </div>
        <div class="card-footer text-center">
          <p title="if you have no log in info,please apply for a seat first" style="color:white">info</p>
        </div>
      </div>
    </div>
  </div>

  <br><br>

</div>


      <div class="container">
        <hr style="border-top: 1px solid white;margin-top:50px">
        <div class="copy">
          <p style="color:rgb(236, 151, 197);text-align:center">&#169 SUST HALL AUTHORITIES.All Rights Reserved.</p>
        </div>
      </div>


</body>
</html>
