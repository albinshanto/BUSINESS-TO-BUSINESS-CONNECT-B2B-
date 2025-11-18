<?php
include( 'DatabaseCon.php' );
$db = new DatabaseCon();
session_start();
$uid = $_SESSION[ 'uid' ];
$icode = $_GET[ 'icode' ];
$cqty = $_GET[ 'cqty' ];
$amt = ( int )$_GET[ 'amt' ]*( int )$_GET[ 'cqty' ];
$sql = "insert into cart(icode,uid,cqty,tamt)values('$icode','$uid','$cqty','$amt')";
$db->insertQuery( $sql );
echo"<script>alert('success');window.location='retailerhome.php';</script>";
?>