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

<th>RETAILER</th>
<th>FEEDBACK</th>
</tr>

<?php
include ('DatabaseCon.php');
$db=new DatabaseCon();
$sql="select feedback.*,retailer.name from feedback inner join retailer on feedback.uid=retailer.rtid";
$rs=$db->selectData($sql);
while($row=mysqli_fetch_array($rs))
{ ?>
  
  <tr>
  <td> <?php echo $row['name']?></td>
  <td> <?php echo $row['feedback']?></td>
   </tr>

<?php } ?>


</table>
</body>
</html>