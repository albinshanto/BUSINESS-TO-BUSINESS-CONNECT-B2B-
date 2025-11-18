<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr>
<th>CATEGORY ID</th>
<th>CATEGORY NAME</th>
</tr>

<?php
include ('DatabaseCon.php');
$db=new DatabaseCon;
$sql="select * from category";
$rs=$db->selectData($sql);
while($row=mysqli_fetch_array($rs))
{ ?>
  
  <tr>
  <td> <?php echo $row['catid']?></td>
  <td> <?php echo $row['cname']?></td>
  </tr>

<?php } ?>

</table>
</body>
</html>