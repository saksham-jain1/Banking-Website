<?php
session_start();
$password=$_POST['pin1'];
$account=$_POST['account'];
$ammount=$_POST['ammount'];
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'bank');
$q="select *from users where acc_no='$_SESSION[account_id]' and password='$password';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num!=1)
{
  echo '<script>';
  echo 'alert("!! Wrong Password !!");';
  echo 'window.location.href="http://localhost/Banking-System/internetBanking.php"';
  echo '</script>';
}
$q1="INSERT INTO transactions(payee,reciver,date_time,ammount) VALUES('$_SESSION[account_id]','$account',sysdate(),'$ammount');";
$q2="update account set balance=(balance-$ammount) where account_no='$_SESSION[account_id]';";
$q3="update account set balance=(balance+$ammount) where account_no='$account';";
$result1=mysqli_query($con,$q1);
$result2=mysqli_query($con,$q2);
$result3=mysqli_query($con,$q3);
if($result1 && $result2 && $result3)
  {
    echo '<script>';
    echo 'alert("Successful Payment");';
    echo 'window.location.href="http://localhost/Banking-System/internetBanking.php"';
    echo '</script>';
  }
  else
  {
    echo '<script>';
    echo 'alert("Error occured\nPlease Try Again");';
    echo 'window.location.href="http://localhost/Banking-System/internetBanking.php"';
    echo '</script>';
  }
mysqli_close($con);
?>