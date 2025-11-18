<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$username=$_GET['uname'];
$password=$_GET['upass'];
$sql="select * from login where uname='$username' and upass='$password'";
$srt=$db->selectQuery($sql);
if($srt==1)
{
    $rs=$db->selectData($sql);
    $row=mysqli_fetch_array($rs);
    $utype=$row['utype'];
    $_SESSION['uid']=$row['uid'];
    $_SESSION['uname']=$row['uname'];
    if($utype=="admin")
    {
        echo"<script>alert('welcome admin');window.location='adminhome.php';</script>";
    }
      else if($utype=="retailer")
      {
        echo"<script>alert('welcome retailer');window.location='retailerhome.php';</script>";
      }
      else if($utype=="wholesaler")
        echo"<script>alert('welcome wholesaler');window.location='wholesalerhome.php';</script>";
}
else
    {
        echo"<script>alert('invalid username or password');window.location='index.php';</script>";
    }
?>  
