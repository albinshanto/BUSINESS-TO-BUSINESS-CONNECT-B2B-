<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uid=$_SESSION['uid'];

$itemcode=$_GET['t1'];
$details=$_GET['t4'];
$amount=$_GET['t5'];
$minimumquantity=$_GET['t6'];
$stock=$_GET['t7'];
$s="update item set icode='$itemcode', details='$details',amt='$amount',mqty='$minimumquantity',stock='$stock' where icode='$itemcode' and wid='$uid'";
$db->insertquery($s);
echo"<script>alert('updated successfully');window.location='product.php';</script>";
?>