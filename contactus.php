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
    <title>Contact Us</title>
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
            <a class="nav-link" aria-current="page" href="home.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
            <a class="nav-link" href="aboutus.php"><i class="fas fa-user"></i>&nbsp;&nbsp;About Us</a>
            <a class="nav-link active bg-success" href="contactus.php"><i class="fas fa-phone-alt "></i>&nbsp;Contact Us</a>
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
    <center>
    <table class="table table-info table-striped" style="width:30vw; min-width: 400px;margin-top: 20vh;">
      <thead>
        <th colspan="2"><h4>Contact Details:-</h4></th>
      </thead>
      <tbody>
        <tr>
          <th>Phone No.:</th>
          <td>7890009870</td>
        </tr>
        <tr>
          <th>Helpline No.::</th>
          <td>1800-1111-111(Toll-free)</td>
        </tr>
        <tr>
          <th>E-mail:</th>
          <td>gringotts.info@gmail.com</td>
        </tr>
        <tr>
          <th>Address:</th>
          <td>Diagon Alley (North Side), Charing Cross Road, London, England, Great Britain</td>
        </tr>
      </tbody>
    </table>
    </center>
  </body>
</html>