<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$c="delete from wholesaler where wid='$id'";
$db->insertQuery($c);
$c1="delete from login where uid='$id' and utype='wholesaler'";
$db->insertQuery($c1);
echo "<script> alert('Deleted Succesfully'); window.location='aviewwholesaler.php';</script>";
?>