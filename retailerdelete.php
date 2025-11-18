<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$c="delete from retailer where rtid='$id'";
$db->insertQuery($c);
$c1="delete from login where uid='$id' and utype='retailer'";
$db->insertQuery($c1);
echo "<script> alert('Deleted Succesfully'); window.location='aviewretailer.php';</script>";
?>