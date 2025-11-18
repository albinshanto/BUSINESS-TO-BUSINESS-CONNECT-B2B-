<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$itemcode=$_POST['t1'];
$itemname=$_POST['iname'];
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$details=$_POST['dtls'];
$amount=$_POST['amt'];
$minimumquantity=$_POST['mqty'];
$stock=$_POST['stock'];
$uid=$_SESSION['uid'];
 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$check = getimagesize($_FILES["file"]["tmp_name"]);
if($check !== false){
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $sql="insert into item(icode,iname,catid,scatid,details,amt,mqty,stock,wid,file)values('$itemcode','$itemname','$category','$subcategory','$details','$amount','$minimumquantity','$stock','$uid','$target_file')";
        $db->insertquery($sql);
        echo"<script>alert('Saved');window.location='product.php';</script>";
   } else {     
      echo "<script>alert('Error uploading file');window.history.back();</script>";
   }
} else {
    echo "<script>alert('File is not an image.');window.history.back();</script>";
}
?>