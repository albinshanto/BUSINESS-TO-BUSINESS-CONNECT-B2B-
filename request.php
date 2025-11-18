<?php
include("DatabaseCon.php");
$db=new DatabaseCon();
session_start();
 $uid-$_SESSION['uid'];

 echo $s1="select sum(qty)  as cnt from cart where cid=$uid";
 $rs1=$db->selectData($s1);
 $row1=mysqli_fetch_array($rs1);
 echo $tqty=$row1['cnt'];
 $tamt=0;

 $odate=Date('Y-m-d');
$sql="insert into ordertable(rtid,tqty,tamt,status,odate) values ('$uid', '$tqty','0', 'pending', '$odate')";
$db->insertQuery($sql);
$ss="select max(oid) as oid from ordertable";
$rss=$db->selectData($ss);
$rw=mysqli_fetch_array($rss);
$oid=$rw['oid'];
$s="select * from cart where cid=$uid";
$rs=$db->selectdata("$s1");
while($row=mysql_fetch_array($rs)) {
    $ino=$row['icode'];
    $iat=$row['qty'];
    $s1="SELECT * from tbl_item where icode=\"".$ino."\"";
    $rs1=$db->selectdata("$s1");
    $row1=mysql_fetch_array($rs1);
    $iamt=$row1['iprize'] * $iat;
    $can=$row1['iprize'];
    $sqt=$row1['qty'];
    
    //
    $sQl1="insert into tbl_order(oid,icode,qty,amt) values('$oid','$ino','$iat','$iamt')";
    $db->insertquery($sQl1);
    
    $sql2="delete from tbl_cart where cid=$id and icode='$ino'";
    $db->insertquery($sql2);
    
    
    ////
    $ntx=$sqt-$iat;
    $sqL1="update tbl_item set stock=$ntx where icode='".$ino."'";
    $db->insertquery($sqL1);
}