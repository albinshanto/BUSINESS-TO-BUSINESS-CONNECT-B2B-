<?php
session_start();
include("DatabaseCon.php");
$db = new DatabaseCon();

$uid = $_SESSION['uid'];   // retailer id

$query = "
SELECT invoice.filepath, invoice.created_at, orderm.oid 
FROM invoice 
INNER JOIN orderm ON orderm.oid = invoice.oid
WHERE orderm.uid = $uid
";

$res = $db->selectData($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Invoices</title>
    <style>
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { padding: 12px; border: 1px solid #ccc; }
        th { background: #4b8ef1; color: white; }
        td a { color: blue; text-decoration: none; }
        h2 { text-align: center; }
    </style>
</head>
<body>

<h2>My Invoices</h2>

<table>
    <tr>
        <th>Order ID</th>
        <th>Invoice</th>
        <th>Date</th>
    </tr>

    <?php while($row = mysqli_fetch_array($res)) { ?>
    <tr>
        <td><?php echo $row['oid']; ?></td>
        <td>
            <a href="<?php echo $row['filepath']; ?>" target="_blank">View Invoice</a>
        </td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
