<?php
     include('DatabaseCon.php');
     $db=new DatabaseCon();
     session_start();
     $uid=$_SESSION['uid']
     ?>
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="retailerhome.php">HOME</a>
   
     <a href="rviewwholesaler.php">WHOLESALER</a>
     <a href="retailerupdate.php">MY PROFILE</a>
     <a href="viewcart.php">MY CART</a>
     <a href="feedback.php">FEEDBACK</a>
     <a href="myorder.php">MY ORDER</a>
     <a href="index.php">LOGOUT</a>
<form action="retailerupdateaction.php">
<?php
     $s="select * from retailer where rtid='$uid'";
     $rs=$db->selectData($s);
     $row=(mysqli_fetch_array($rs));
     ?>  
<table border="1">
     <tr><td>NAME</td><td><input type="text"name="t1"value="<?php echo $row['name'];?>"/></td></tr>
     <tr><td>ADDRESS</td><td><input type="text"name="t2"value="<?php echo $row['address'];?>"/></td></tr>
     <tr><td>DISTRICT</td><td><input type="text"name="t3"value="<?php echo $row['district'];?>"/></td></tr>
     <tr><td>PIN CODE</td><td><input type="text"name="t4"value="<?php echo $row['pincode'];?>"/></td></tr>
     <tr><td>PHONE NUMBER</td><td><input type="text"name="t5"value="<?php echo $row['phn'];?>"/></td></tr>
     <tr><td>EMAIL</td><td><input type="text"name="t6"value="<?php echo $row['email'];?>"/></td></tr>
     <tr><td><input type="submit" value="update"/></td></tr>
</table>
</form>     
</body>
</html>