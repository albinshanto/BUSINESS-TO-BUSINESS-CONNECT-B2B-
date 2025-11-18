<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$oid=$_GET['id'];
$s="update orderm set status='Delivered',pstatus='paid' where oid=$oid";
$db->insertQuery($s);






echo "<script>alert('Delivered');window.location='wvrequest.php'</script>";
?>