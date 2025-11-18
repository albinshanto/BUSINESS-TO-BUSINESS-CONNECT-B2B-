<?php
include( 'DatabaseCon.php' );
$db = new DatabaseCon();
session_start();
$uid = $_SESSION[ 'uid' ];
$dte = Date( 'Y-m-d' );
echo $s = 'select * from wholesaler where wid in (select wid from item where icode in (select icode from cart where uid='.$uid.'))';
$rs = $db->selectData( $s );
while ( $row1 = mysqli_fetch_array( $rs ) ) {
    $wid = $row1[ 'wid' ];
    $sql = "insert into orderm(odate,uid,tqty,tamt,status,wid,pstatus) values('$dte','$uid','0','0','requested','$wid','pending')";
    $db-> insertQuery( $sql );
    $sql1 = 'select max(oid) as oid from orderm';
    $rs1 = $db->selectData( $sql1 );
    $row2 = mysqli_fetch_array( $rs1 );
    $oid = $row2[ 'oid' ];
    $tamt = 0;
    $tqty = 0;
    echo $s1 = 'select * from cart inner join item on item.icode = cart.icode inner join wholesaler on wholesaler.wid=item.wid where item.wid='.$row1[ 'wid' ].' and cart.uid='.$_SESSION[ 'uid' ];
    $rs1 = $db->selectData( $s1 );
    while ( $row = mysqli_fetch_array( $rs1 ) ) {
        $icode = $row[ 'icode' ];
        $mqty = $row[ 'cqty' ];
        $tamt += ( $row[ 'amt' ] * $row[ 'cqty' ] );
        $tqty += 1;
        $sql2 = "insert into orderc(oid,icode,qty) values('$oid','$icode','$mqty')";
        $db->insertQuery( $sql2 );
        $sql3 = "delete from cart where cid='".$row[ 'cid' ]."'";
        $db->insertQuery( $sql3 );

    }
    $sql4 = 'update orderm set tqty='.$tqty.',tamt='.$tamt.' where oid='.$oid;
    $db->insertQuery( $sql4 );

}
echo"<script>alert('request');window.location='myorder.php';</script>";
?>

