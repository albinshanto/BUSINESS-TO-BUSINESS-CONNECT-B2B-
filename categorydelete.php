<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$c="delete from category where catid='$id'";
$db->insertQuery($c);
$c1="delete from login where uid='$id' and utype='category'";
$db->insertQuery($c1);
echo "<script> alert('Deleted Succesfully'); window.location='category.php';</script>";
?>