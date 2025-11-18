<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$oid=$_GET['oid'];
$s="update orderm set pstatus='cod' where oid=$oid";
$db->insertQuery($s);
echo "<script>alert('order successfull');window.location='myorder.php'</script>";
?>