<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uid=$_SESSION['uid'];

$shopname=$_GET['t1'];
$ownername=$_GET['t2'];
$address=$_GET['t3'];
$district=$_GET['t4'];
$pincode=$_GET['t5'];
$email=$_GET['t6'];
$phonenumber=$_GET['t7'];
$licencenumber=$_GET['t8'];
$gstnumber=$_GET['t9'];
$s="update wholesaler set shname='$shopname', oname='$ownername', address='$address', dist='$district',pincode='$pincode',email='$email',phno='$phonenumber',lno='$licencenumber',gstno='$gstnumber' where wid='$uid'";
$db->insertquery($s);
$s1="update login set uname='$email' where uid='$uid' and utype='wholesaler'";
$db->insertquery($s1);
echo"<script>alert('updated successfully');window.location='wholesalerupdate.php';</script>";
?>