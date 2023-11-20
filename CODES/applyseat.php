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


  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="photo.css">


  <title>Apply for Seat</title>
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
            <!--  <li class="nav-item">
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
            <li class="nav-item">
              <a class="nav-link" href="student.php" style="font-size:20px;color: #ee85dd;text-decoration: none;">
                <?php
                // session_start();
                if(isset($_SESSION['user'])){
                  echo $_SESSION['user'];
                  header('location:student.php');
                }
               ?>
              </a>
            </li>
          </ul>
          
        </div>
      </nav>

    </div>
  </div>


main <!--  -->
          
    <div class="container" style="background-color: #1d2834;text-align: ;margin-top:30px">
    <div style="border:1px solid white;width:60%;border-radius: 50px;margin: auto;padding: ;background-color: #228b22;">
      <p style="color: black;font-size: 25px;text-align: center;margin: auto;">Apply for Seat</p>
    </div>
    </div>

<br><br>
<!-- LOG IN  -->


  <div class="container">
    <div class="row justify-content-center">
      <div class="card my-auto shadow" style="width:350px;">

        <div class="card-header text-center">
          <h4>Apply for Seat</h4>
        </div>
        <div class="card-body">
          <form action="applyseatprocess.php" method="post">
            <div class="form-group" style="width:";>
              <label for="name">Name</label><br>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group" style="width:";>
              <label for="email">Email</label><br>
              <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter Email" required>
            </div>
            
            <div class="form-group" style="width:";>
              <label for="department">Department</label><br>
              <select name="dept" class="form-control">
                <option selected>ARC</option>
                <option value="ANP">ANP</option>
                <option value="BMB">BMB</option>
                <option value="BBA">BBA</option>
                <option value="BNG">BNG</option>
                <option value="CEP">CEP</option>
                <option value="CEE">CEE</option>
                <option value="CSE">CSE</option>
                <option value="CHE">CHE</option>
                <option value="EEE">EEE</option>
                <option value="ECO">ECO</option>
                <option value="ENG">ENG</option>
                <option value="FES">FES</option>
                <option value="FET">FET</option>
                <option value="GEB">GEB</option>
                <option value="GEE">GEE</option>
                <option value="IPE">IPE</option>
                <option value="MEE">MEE</option>
                <option value="PME">PME</option>
                <option value="MAT">MAT</option>
                <option value="OCG">OCG</option>
                <option value="PHY">PHY</option>
                <option value="STA">STA</option>
                <option value="PSS">PSS</option>
                <option value="PAD">PAD</option>
                <option value="SCW">SCW</option>
                <option value="SOC">SOC</option>
                <option value="SWE">SWE</option>
              </select>
            </div>
            <div class="form-group">
              <label for="registration">Registration Number</label><br>
              <input type="text" class="form-control" name="registration" placeholder="Enter Registration Number" required>
            </div>
            <div class="form-group">
              <label for="Hall">Hall Attachment</label><br>
              <select name="hall" type="text" class="form-control" required>
                <option selected>Shah Paran Hall</option>
                <option value="Bangabandhu Sheikh Mujibur Rahman Hall">Bangabandhu Sheikh Mujibur Rahman Hall</option>
                <option value="Syed Mujtaba Ali Hall">Syed Mujtaba Ali Hall</option>
                <option value="Shahid Jononi Jahanara Imam Hall">Shahid Jononi Jahanara Imam Hall</option>
                <option value="Begum Sirajunnesa Chowdhury Hall">Begum Sirajunnesa Chowdhury Hall</option>
              </select>
            </div>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
            <!-- <button type="submit" name="submit">Submit</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>



  <br><br>

</div>

<!-- copyright -->

      <div class="container">
        <hr style="border-top: 1px solid white;margin-top:75px">
        <div class="copyright">
          <p style="color:rgb(236, 151, 197);text-align:center">&#169 SUST HALL AUTHORITIES.All Rights Reserved.</p>
        </div>
      </div>



      <p style="color:white;font-size:20px;text-align:center;"> <a href="admin.php" style="text-decoration:none;color:rgb(222, 72, 230);">Administration</a> </p>


<!-- script -->
<script>
  function showbox() {
    alert("Thankyou for applying for seat\nWe will review it within an week");
  }
</script>

</body>
</html>