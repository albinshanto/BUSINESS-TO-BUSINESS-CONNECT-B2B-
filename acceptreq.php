<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$oid=$_GET['id'];
$s="update orderm set status='Accepted' where oid=$oid";
$db->insertQuery($s);
$sql="select icode,qty from orderc where oid=$oid";
$rs=$db->selectData($sql);
while($row=mysqli_fetch_array($rs))
{
    $sq="select stock from item where icode='".$row['icode']."'";
    $rs1=$db->selectData($sq);
    $row1=mysqli_fetch_array($rs1);
    $nqty=(int)$row1['stock']-(int)$row['qty'];
    $db->insertQuery("update item set stock =".$nqty." where icode='".$row['icode']."'");
    }
        echo "<script>alert('Accepted');window.location='wvrequest.php'</script>";
?>