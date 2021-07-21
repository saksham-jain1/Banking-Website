<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.0.2-dist\bootstrap-5.0.2-dist\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="fontawesome-free-5.15.3-web\css\all.css" rel="stylesheet">
    <title>Home Page</title>
  </head>
  <body>
    <script src="bootstrap-5.0.2-dist\bootstrap-5.0.2-dist\js\bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img src="resources/do.jpg" alt="logo" style="border-radius: 90px;max-height: 60px;max-width: 60px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav nav-pills">
            <a class="nav-link active bg-success" aria-current="page" href="home.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
            &nbsp;&nbsp;
            <a class="nav-link" href="aboutus.php"><i class="fas fa-user"></i>&nbsp;&nbsp;About Us</a>
            <a class="nav-link" href="contactus.php"><i class="fas fa-phone-alt "></i>&nbsp;Contact Us</a>
            <a class="nav-link" href="internetBanking.php"><i class="fa fa-university"></i>&nbsp;&nbsp;Internet Banking</a>
            <?php
            if(!isset($_SESSION["account_id"]))
            {
              ?>
            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
            <?php
            }
            else
            {
              ?>
            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            <?php
            }
            ?>
            &nbsp;&nbsp;&nbsp;
          </div>
        </div>
      </div>
    </nav>
    <h1><center>Gringotts Bank Welcomes You &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></h1><br>
    <div class="container-fluid">
      <div  class="row d-flex flex-row-reverse">
        <div class="col-md-7 float-md-end mb-3 ms-md-3">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img src="resources/1626403375688-01.jpeg" class="d-block w-100" alt="..." style="height: 70vh;">
              </div>
              <div class="carousel-item" data-bs-interval="1500">
                <img src="resources/pexels-cottonbro-3943723.jpg" class="d-block w-100" alt="..." style="height: 70vh;">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="resources/pexels-pixabay-50987.jpg" class="d-block w-100" alt="..." style="height: 70vh;">
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-4 mb-3 ms-md-3">
        <br>
        <h3><center>The Bank Of Wizards</center></h3>
        <br>
        <p style="text-align: justify;">
          Hii Wizards and Sorceress. This is the bank for you
          <?php
            if(!isset($_SESSION["account_id"]))
            {
              ?>
            <center><a href="login.php" class="btn btn-success" role="button"><b>LOGIN</b></a></center>
            <?php
            }
            else
            {
              ?>
            <center><a href="internetBanking.php" class="btn btn-success" role="button"><b>Get Started</b></a></center>
            <?php
            }
            ?>
        </p>
      </div>
    </div>
    <br>
    <br>
    <center>
    <div class="row overflow-auto" style="width:70vw; min-width: 300px;max-height: 300px;">
    <table class="table" style="border: 4px solid rgb(201, 208, 3);">
      <thead class="table-dark">
        <th>Notice</th>
      </thead>
      <tbody>
        <tr>
          <td>
            <marquee>This is the first Notice</marquee>
          </td>
        </tr>
        <tr>
          <td>
            <marquee>This is the second Notice</marquee>
          </td>
        </tr>
        <tr>
          <td>
            <marquee>This is the third Notice</marquee>
          </td>
        </tr>
      </tbody>
    </table>
    <h2>SO ON.. <br> This site is updating</h2>
  </center>
    </div>
    </div>
  </body>
</html>