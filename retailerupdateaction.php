<?php
  include('DatabaseCon.php');
  $db=new DatabaseCon();
  session_start();
  $uid=$_SESSION['uid'];
$name=$_GET['t1'];
$address=$_GET['t2'];
$district=$_GET['t3'];
$pincode=$_GET['t4'];
$phonenumber=$_GET['t5'];
$email=$_GET['t6'];
$s="update retailer set name='$name', address='$address', district='$district',pincode='$pincode',phn='$phonenumber',email='$email' where rtid='$uid'";
$db->insertquery($s);
$s1="update login set uname='$email' where uid='$uid' and utype='retailer'";
$db->insertquery($s1);
echo"<script>alert('updated successfully');window.location='retailerupdate.php';</script>";
?>