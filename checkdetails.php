<?php
session_start();
$account=$_GET['account'];
$name=$_GET['name'];
$ammount=$_GET['ammount'];
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'bank');
$q1="select *from account where account_no='$account' and account_holder='$name';";
$q2="select balance from account where account_no='$_SESSION[account_id];'";
$result1=mysqli_query($con,$q1);
$result2=mysqli_query($con,$q2);
$row=mysqli_fetch_array($result2);
$num=mysqli_num_rows($result1);
if($num==1)
{
  if($row['balance']>=$ammount)
  {
    echo "1";
  }
  else
  {
    echo "!! Low Balance !!";
  }
}
else 
{
  echo "!! Inavlid Credentials !!";
}
mysqli_close($con);
?>