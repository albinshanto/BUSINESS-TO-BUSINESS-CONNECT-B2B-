<?php
include( 'DatabaseCon.php' );
$db = new DatabaseCon();
session_start();
$uid = $_SESSION[ 'uid' ];
$icode = $_GET[ 'ic' ];
$cid = $_GET[ 'n' ];
$ss = "select cqty,tamt from cart where cid=$cid";
$rs = $db->selectData( $ss );
$row = mysqli_fetch_array( $rs );
$cqty = $row[ 'cqty' ];
$amt = $row[ 'tamt' ];
$sql = "insert into cartc(icode,uid,cqty,tamt)values('$icode','$uid','$cqty','$amt')";
$db->insertQuery( $sql );
$db->insertQuery( "delete from cart where cid=$cid" );
echo"<script>alert('success');window.location='viewcart.php';</script>";
?>