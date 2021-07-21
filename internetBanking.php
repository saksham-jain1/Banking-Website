<?php
session_start();
if(!isset($_SESSION["account_id"]))
{
  header('location:http://localhost/Banking-System/login.php');
}
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'bank');
$q1="select * from transactions where payee='$_SESSION[account_id]' or reciver='$_SESSION[account_id]';";
$q2="select * from account where account_no='$_SESSION[account_id]';";
$result1=mysqli_query($con,$q1);
$num1=mysqli_num_rows($result1);
$result2=mysqli_query($con,$q2);
$row2=mysqli_fetch_array($result2);
$num2=mysqli_num_rows($result2);
mysqli_close($con);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-5.0.2-dist\bootstrap-5.0.2-dist\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="fontawesome-free-5.15.3-web\css\all.css" rel="stylesheet">
    <title>Internet Banking</title>
  </head>
  <body>
    <script src="bootstrap-5.0.2-dist\bootstrap-5.0.2-dist\js\bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      function toggle()
      {
        const togglePassword=document.getElementById('togglePassword');
        const password=document.getElementById('pin1');
        const type=password.getAttribute('type')==='password'?'text':'password';
        password.setAttribute('type', type);
        togglePassword.classList.toggle('fa-eye-slash')
      }
      function payto()
      {
        var checkbalance = document.getElementById('checkbalance');
        var payto = document.getElementById('payto');
        var transactionHistory = document.getElementById('transactionHistory');
        var checkbalancenav = document.getElementById('checkbalancenav');
        var paytonav = document.getElementById('paytonav');
        var transactionHistorynav = document.getElementById('transactionHistorynav');
        checkbalance.classList='bg-light d-none';
        payto.classList='d-block';
        transactionHistory.classList='row overflow-auto d-none';
        checkbalancenav.className='nav-link';
        paytonav.className='nav-link active';
        transactionHistorynav.className='nav-link';
      }
      function checkbalance()
      {
        var checkbalance = document.getElementById('checkbalance');
        var payto = document.getElementById('payto');
        var transactionHistory = document.getElementById('transactionHistory');
        var checkbalancenav = document.getElementById('checkbalancenav');
        var paytonav = document.getElementById('paytonav');
        var transactionHistorynav = document.getElementById('transactionHistorynav');
        checkbalance.classList='bg-light d-block';
        payto.classList='d-none';
        transactionHistory.classList='row overflow-auto d-none';
        checkbalancenav.className='nav-link active';
        paytonav.className='nav-link';
        transactionHistorynav.className='nav-link';
        
      }
      function transactionHistory()
      {
        var checkbalance = document.getElementById('checkbalance');
        var payto = document.getElementById('payto');
        var transactionHistory = document.getElementById('transactionHistory');
        var checkbalancenav = document.getElementById('checkbalancenav');
        var paytonav = document.getElementById('paytonav');
        var transactionHistorynav = document.getElementById('transactionHistorynav');
        checkbalance.classList='bg-light d-none';
        payto.classList='d-none';
        transactionHistory.classList='row overflow-auto d-block';
        checkbalancenav.className='nav-link';
        paytonav.className='nav-link';
        transactionHistorynav.className='nav-link active';
      }
      function checkdetails()
      {
        var account=document.getElementById('Account');
        var name=document.getElementById('Name');
        var ammount=document.getElementById('Ammount');
        var reason=document.getElementById('reason');
        var next=document.getElementById('next'); 
        var submit=document.getElementById('submit');
        var pin=document.getElementById('pin');
        var account1=account.value;
        var name1=name.value;
        var ammount1=ammount.value;
        var reason1=reason.value;
        var req = new XMLHttpRequest();
        req.open("get","http://localhost/Banking-System/checkdetails.php?account="+account1+"&name="+name1+"&ammount="+ammount1,"true");
        req.send();
        req.onreadystatechange=function(){
        if(req.readyState==4&&req.status==200)
          {
            if(req.responseText=="1")
            {
              account.readOnly=true;
              name.readOnly=true;
              ammount.readOnly=true;
              reason.readOnly=true;
              pin.classList.remove('d-none');
              next.classList.add('d-none');
              submit.classList.remove('d-none');
            }
            else
            {
              alert(req.responseText);
            }
          }
        };
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
            <a class="nav-link active bg-success" href="internetBanking.php"><i class="fa fa-university"></i>&nbsp;&nbsp;Internet Banking</a>
            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
            &nbsp;&nbsp;&nbsp;
          </div>
        </div>
      </div>
    </nav>
    <center>
    <form method="POST" action="transaction.php" style="margin-top: 10vh;width: 45vw;min-width: 400px;padding: 40px;padding-top: 0px; border-radius: 30px;" class="bg-light">
      <ul class="nav nav-tabs justify-content-evenly">
        <li class="nav-item">
          <a class="nav-link active" id="paytonav" onclick="payto()">Pay</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="checkbalancenav" onclick="checkbalance()">Check Balance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="transactionHistorynav" onclick="transactionHistory()">Transaction History</a>
        </li>
      </ul>
      <span id="payto" class="d-block" >
      <h3>Pay To</h3>
      <br>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Account Id</label>
      <input type="text" class="form-control" id="Account" name="account" placeholder="Account Id" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Name</label>
      <input type="text" class="form-control" id="Name" name="name" placeholder="Account Holder's Name" required>
    </div>
    <label for="Ammount" class="form-label">Ammount</label>
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa fa-rupee-sign"></i></span>
      <input type="text" class="form-control" id="Ammount" name="ammount" aria-label="Amount (to the nearest dollar)" placeholder="0.00" required>
      <span class="input-group-text">/-</span>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Reason <br>(optional)</span>
      <textarea class="form-control" id="reason" aria-label="With textarea" required></textarea>
    </div>
  <span id="pin" class="d-none">
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
      <div class="col-sm-7 input-group">
        <input type="password" maxlength="6" minlength="6" class="form-control" id="pin1" name="pin1" required>
        <span class="input-group-text">
        <i class="far fa-eye" id="togglePassword" onclick="toggle()" style="cursor: pointer;"></i>
        </span>
      </div>
    </div>
  </span>
    <button type="button" id="next" onclick="checkdetails()" class="btn btn-success float-md-end">Next</button>
    <input type="submit" id="submit" class="btn btn-success d-none" placeholder="Pay">
  </span>
      <div class="bg-light d-none" id="checkbalance" style="padding: 40px;border-radius: 30px;">
        <h6>Account Id:     <?php echo $row2["account_no"]; ?></h6>
        <h5>Ammount</h5>
        <h3><?php echo $row2["balance"]; ?></h3>
      </div>
      <div class="row overflow-auto d-none" style="max-height: 60vh;padding: 40px;" id="transactionHistory" >
        <table class="table table-striped table-bordered table-hover table-info">
          <thead class="table-dark">
            <tr>
              <th>S.No.</th>
              <th>To / From</th>
              <th>Debit / Credit</th>
              <th>Ammount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for($i=1;$i<=$num1;$i++)
            {
              $row1=mysqli_fetch_array($result1);
            ?>
            <tr>
              <td><?php echo $row1['id']; ?></td>
              <td><?php echo $row1['payee']==$_SESSION["account_id"]?$row1['reciver']:$row1['payee']; ?></td>
              <td><?php echo $row1['payee']==$_SESSION["account_id"]?"Debit":"Credit"; ?></td>
              <td><?php echo $row1['ammount']; ?></td>
              <td><?php echo $row1['date_time']; ?></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </form>
  </center>
  </body>
</html>