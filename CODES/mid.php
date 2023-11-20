<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="mid.css">
  <title></title>
</head>
<body>
  <p style="font-size:30px">Male: 
  <?php
    session_start();

    $con=mysqli_connect('localhost','root','','hall');


    $sql="SELECT * FROM student WHERE hall='Shah Paran Hall' || hall='Bangabandhu Sheikh Mujibur Rahman Hall' || hall='Syed Mujtaba Ali Hall'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);

    echo 1500-$num;
 ?>
</p>
<p style="font-size:30px">Female: 
  <?php
    // session_start();

    $con=mysqli_connect('localhost','root','','hall');


    $sql="SELECT * FROM student WHERE hall='Shahid Jononi Jahanara Imam Hall' || hall='Begum Sirajunnesa Chowdhury Hall'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);

    echo 1000-$num;
 ?>
</p>




</body>
</html>














    <div class="container">
      <div class="row justify-content-">
        <div class="card my-auto shadow" style="width:px;">

        <!-- <div class="card-header text-center">
          <h4>vacant seat</h4>
        </div> -->
          <div class="card-body" style="background-color:#4c08a2;">
          <p style="text-align:center;color:white;font-size: 20px;">Vacant Seats</p>
              <p style="font-size:px;color:white">Male: 
                <?php
                  // session_start();
                  $con=mysqli_connect('localhost','root','','hall');
                  $sql="SELECT * FROM student WHERE hall='Shah Paran Hall' || hall='Bangabandhu Sheikh Mujibur Rahman Hall' || hall='Syed Mujtaba Ali Hall'";
                  $result=mysqli_query($con,$sql);
                  $num=mysqli_num_rows($result);
                  echo 1500-$num;
               ?>
              </p>
              <p style="font-size:px;color:white;">Female: 
                <?php
                  // session_start();
                  $con=mysqli_connect('localhost','root','','hall');
                  $sql="SELECT * FROM student WHERE hall='Shahid Jononi Jahanara Imam Hall' || hall='Begum Sirajunnesa Chowdhury Hall'";
                  $result=mysqli_query($con,$sql);
                  $num=mysqli_num_rows($result);
                  echo 1000-$num;
               ?>
              </p>
          </div>
        </div>
      </div>
    </div>
