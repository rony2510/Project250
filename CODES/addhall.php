<?php 

  session_start();
  if(!isset($_SESSION['admin'])){ 
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
  
  <title><?php echo "Administration-Add Hall"; ?></title>
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
    
    <div class="container" style="background-color: #1d2834;text-align: center;margin-top:50px">
      <p style="color: rgb(30, 227, 209);font-size: 25px;">Add Hall</p>
      <hr style=" width: 70%;margin-left: auto;margin-right: auto;border-top:1px solid white;">
    </div>
  

<br>

  <div class="container">
    <div class="row justify-content-center">
      <div class="card my-auto shadow" style="width:400px;">

        <div class="card-header text-center">
          <h4>Add Hall</h4>
        </div>
        <div class="card-body">
          <form action="addhallprocess.php" method="post">
            <div class="form-group" style="width:";>
              <label for="name">Hall Name</label><br>
              <input type="text" name="name" placeholder="Enter Hall Name"><br>
              <label for="name">Details</label><br>
              <textarea class="form-control" name="detail" rows="5" placeholder="Write detail" required></textarea>
            </div>
            <br>
            <input type="submit" name="submit" value="ADD" class="btn btn-primary w-100">
          </form>
        </div>
      </div>
    </div>
  </div>



  <br><br>

<!-- logout -->
  <div class="container">
    <p style="text-align:;font-size: 20px;"> <a href="admin.php" style="text-decoration:none;color:white;"><b>Back</b></body></a> </p>
    <br>
  </div>


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