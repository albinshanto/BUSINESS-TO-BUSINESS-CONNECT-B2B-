<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$sname=$_GET['t1'];
$catid=$_GET['category'];
$s="select * from subcategory where sname='$sname'";
$rt=$db->selectQuery($s);
if($rt==1){
    echo"<script>alert('subcategory already exists');window.location='subcategory.php';</script>";
}
else
{
$sql="insert into subcategory(sname,catid)values('$sname','$catid')";
$db->insertquery($sql);
echo"<script>alert('Saved');window.location='subcategory.php';</script>";
}
?>