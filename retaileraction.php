
<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$name=$_GET['t1'];
$adr=$_GET['message'];
$dist=$_GET['District'];
$pin=$_GET['t3'];
$email=$_GET['t4'];
$pnum=$_GET['t5'];
$psd=$_GET['t6'];
$s="select * from retailer where email='$email'";
$rt=$db->selectQuery($s);
if($rt==1){
    echo"<script>alert('email already exists');window.location='retailer.php';</script>";
}
else
{
$sql="insert into retailer(name,address,district,pincode,email,phn)values('$name','$adr','$dist','$pin','$email','$pnum')";
$db->insertquery($sql);
$s="select max(rtid)as rtid from retailer";
$rs=$db->selectdata($s);
$row=mysqli_fetch_array($rs);
$rtid=$row['rtid'];
$sql1="insert into login(uid,uname,upass,utype)values('$rtid','$email','$psd','retailer')";
$db->insertquery($sql1);
echo"<script>alert('Saved');window.location='index.php';</script>";
}
?>