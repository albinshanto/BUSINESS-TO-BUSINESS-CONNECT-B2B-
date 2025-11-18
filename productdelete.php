<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$c="delete from item where icode='$id'";
$db->insertQuery($c);
echo "<script> alert('Deleted Succesfully'); window.location='product.php';</script>";
?>