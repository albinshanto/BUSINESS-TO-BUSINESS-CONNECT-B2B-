<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$oid=$_GET['oid'];
$s="update orderm set pstatus='paid' where oid=$oid";
$db->insertQuery($s);
echo "<script>alert('paid');window.location='myorder.php'</script>";
?>