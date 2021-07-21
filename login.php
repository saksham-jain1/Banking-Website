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
    <title>Login</title>
  </head>
  <body>
    <script src="bootstrap-5.0.2-dist\bootstrap-5.0.2-dist\js\bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      function  toggle()
      {
        const togglePassword=document.getElementById('togglePassword');
        const password=document.getElementById('inputPassword3');
        const type=password.getAttribute('type')==='password'?'text':'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash')
      }
    </script>
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
            <a class="nav-link" href="contactus.php"><i class="fas fa-phone-alt "></i>&nbsp;Contact Us</a>
            <a class="nav-link" href="internetBanking.php"><i class="fa fa-university"></i>&nbsp;&nbsp;Internet Banking</a>
            <a class="nav-link active bg-success" href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
            &nbsp;&nbsp;&nbsp;
          </div>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <center>
    <form method="POST" action="validation.php" style="margin-top: 15vh;width: 40vw;min-width: 400px;padding: 40px; border-radius: 30px;" class="bg-info">
      <h3>Sign In</h3>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-6 col-form-label">Account Id / User Name</label>
        <div class="col-sm-8 input-group">
          <input type="text" class="form-control" id="inputEmail3" name="id" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-7 input-group">
          <input type="password" class="form-control" id="inputPassword3" name="password" required>
          <span class="input-group-text">
          <i class="far fa-eye" id="togglePassword" onclick="toggle()" style="cursor: pointer;"></i>
          </span>
        </div>
      </div>
      <center>
      <button type="reset" class="btn btn-warning">Reset</button>
      <button type="submit" class="btn btn-primary">Sign in</button>
      </center>
    </form>
    </center>
  </body>
</html>