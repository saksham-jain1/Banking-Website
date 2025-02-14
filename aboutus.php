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
    <title>About Us</title>
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
            <a class="nav-link active bg-success" href="aboutus.php"><i class="fas fa-user"></i>&nbsp;&nbsp;About Us</a>
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
    <h1><center>Welcome To Gringotts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></h1><br><br>
    <center>
    <table class="table table-light table-striped" style="width: 40vw; min-width: 400px;">
      <tbody>
        <tr>
          <th>Location:</th>
          <td>Diagon Alley (North Side), Charing Cross Road, London, England, Great Britain</td>
        </tr>
        <tr>
          <th>Permanent residents</th>
          <td><ul><li>Goblins</li>
            <li>A Ukrainian Ironbelly</li></ul></td>
        </tr>
        <tr>
          <th>Affiliation</th>
          <td><ul><li>British Ministry of Magic</li>
            <li>Consortium of Goblinary Finance & Red-Nosed Wizard Investors</li></ul></td>
        </tr>
      </tbody>
    </table>
    </center>
    <div class="clearfix container-fluid" style="text-align:justify;">
      <br>
      <h2>History</h2>
      <img src="resources/pinpep_gringotts_190319_008-l.jpg" class="col-lg-5 float-md-end mb-3 ms-md-3" alt="bank image">
      <br>
      <br>
      <p>The bank was created by the goblin Gringott[6] in 1474.[7] The creation of Gringotts is considered to be linked to the 14th Century Wizarding Economic Bubble, which happened the century before.[8] The bank was put in the hands of the Ministry of Magic shortly thereafter, being under some degree of wizarding management already by the 1500s' when Tertius applied for the job of Curse-Breaker to two wizards who were discussing job vacancies at the door to Gringotts.[9] In 1865, the Ministry decided to put full control of Gringotts back in goblin hands.</p>
      <p>On 29 November 1926, Gringotts was put on lockdown with protective enchantments cast.[11]</p>
      <p>During Voldemort's control of the Ministry (1997 to 1998), the bank was put yet again under the Ministry.[12] With the defeat of Voldemort and the end of the Second Wizarding War, Gringotts was presumably put back into Goblin management.</p>
      <br>
      <br>
    </div>
    <div class="clearfix container-fluid" style="text-align:justify;">
      <h2>Managed By</h2>
      <p>"Are you seeking a challenging career involving travel, adventure, and substantial, danger-related treasure bonuses? Then consider a position with Gringotts Wizarding Bank, who are currently recruiting Curse-Breakers for thrilling opportunities abroad"
        — Pamphlet on Gringotts jobs given to Hogwarts students</p>
      <img src="resources/Gringotts_Goblins.png" class="col-md-5 float-md-start mb-3 me-md-3" alt="bank image">
      <p>While Gringotts is largely staffed by goblins, including Griphook, Bogrod, and Ragnok, it is known that the bank does employ humans: Gringotts actively advertises career employment to Hogwarts students at least for Curse-Breakers, and may likely also do so to other wizarding schools elsewhere. Bill Weasley works as a Curse-Breaker for Gringotts in Egypt, retrieving artefacts from ancient Egyptian tombs and pyramids after his graduation from Hogwarts. When he wanted to do work for the Order of the Phoenix, Bill transferred to a desk job in England to be near home. That same year, Fleur Delacour took a job at Gringotts as well after participating in the Triwizard Tournament, to improve her English, though she only works part-time. They also employ Dragon Feeders, a job with a high mortality rate, at 7 Galleons per week.</p>
      <p>At least during Harry Potter's break-in of the bank, there seems to be a full-time security force that is comprised of wizard guards, and that rushes to the scene when the Lestrange vault was broken into. Despite this, Griphook mentions at that time that the goblins resent "wand-bearer" interference in their internal affairs.</p>
      <br>
    </div>
  </body>
</html>