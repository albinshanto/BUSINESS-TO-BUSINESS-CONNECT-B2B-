<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$c="delete from subcategory where scatid='$id'";
$db->insertQuery($c);
echo "<script> alert('Deleted Succesfully'); window.location='subcategory.php';</script>";
?>