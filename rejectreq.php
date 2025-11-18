<?php
include( 'DatabaseCon.php' );
$db = new DatabaseCon();
$oid = $_GET[ 'id' ];
echo $s = "update orderm set status='Rejected'where oid=$oid";
$db->insertQuery( $s );
echo "<script>alert('Rejected');window.location='wvrequest.php';</script>";
?>