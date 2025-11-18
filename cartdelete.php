<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['n'];
$ic=$_GET['ic'];
$c="delete from cart where cid='$id' and icode='$ic'";
$db->insertQuery($c);
echo "<script> alert('Deleted Succesfully'); window.location='viewcart.php';</script>";
?>