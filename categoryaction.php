<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$cname=$_GET['t1'];
$s="select * from category where cname='$cname'";
$rt=$db->selectQuery($s);
if($rt==1){
    echo"<script>alert('category already exists');window.location='category.php';</script>";
}
else
{
$sql="insert into category(cname)values('$cname')";
$db->insertquery($sql);
echo"<script>alert('Saved');window.location='category.php';</script>";
}
?>