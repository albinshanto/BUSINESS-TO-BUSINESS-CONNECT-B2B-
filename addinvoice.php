<?php
session_start();
include( 'DatabaseCon.php' );
$db = new DatabaseCon();

if ( !isset( $_SESSION[ 'uid' ] ) ) {
    echo 'Session expired. Please log in again.';
    exit;
}

if ( !isset( $_GET[ 'oid' ] ) ) {
    echo 'Invalid Request!';
    exit;
}

$uid = $_SESSION[ 'uid' ];

$oid = $_GET[ 'oid' ];

// FETCH ORDER MAIN DETAILS
$ord_query = "SELECT * FROM orderm WHERE oid = $oid";
$ord_res = $db->selectData( $ord_query );
$order = mysqli_fetch_array( $ord_res );

if ( !$order ) {
    echo '<h3>Order not found!</h3>';
    exit;
}

// Validate retailer ID
if ( $order[ 'uid' ] != $uid ) {
    echo "<h3 style='color:red;'>❌ Access Denied!</h3>";
    exit;
}

// FETCH RETAILER
$retailer_query = 'SELECT * FROM retailer WHERE rtid = '.$order[ 'uid' ];
$retailer_res = $db->selectData( $retailer_query );
$retailer = mysqli_fetch_array( $retailer_res );

// FETCH ORDER ITEMS ( FIXED )
$item_query = "
    SELECT 
        orderc.qty AS order_qty, 
        item.iname, 
        item.amt 
    FROM orderc
    INNER JOIN item ON item.icode = orderc.icode
    WHERE orderc.oid = $oid
";

$item_res = $db->selectData( $item_query );
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Invoice</title>
<style>
body {
    font-family: Arial;
    background: #f4f4f4;
    padding: 20px;
}
.invoice-box {
    width: 800px;
    background: #fff;
    margin: auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px #ccc;
}
h2 {
    text-align: center;
    margin-bottom: 25px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}
th {
    background: #4b8ef1;
    color: #fff;
    padding: 10px;
}
td {
    padding: 10px;
    background: #f9f9f9;
}
.total-row td {
    font-weight: bold;
}
.btn {
    background: #4b8ef1;
    padding: 10px 18px;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}
</style>
</head>

<body>

<div class = 'invoice-box'>
<h2>INVOICE</h2>

<h3>Retailer Details</h3>
<table>
<tr><td><b>Name:</b> <?php echo $retailer[ 'name' ];
?></td></tr>
<tr><td><b>Address:</b> <?php echo $retailer[ 'address' ];
?></td></tr>
<tr><td><b>District:</b> <?php echo $retailer[ 'district' ];
?></td></tr>
<tr><td><b>Pincode:</b> <?php echo $retailer[ 'pincode' ];
?></td></tr>
<tr><td><b>Phone:</b> <?php echo $retailer[ 'phn' ];
?></td></tr>
<tr><td><b>Email:</b> <?php echo $retailer[ 'email' ];
?></td></tr>
</table>

<h3>Order Details</h3>
<table>
<tr><td><b>Order ID:</b> <?php echo $order[ 'oid' ];
?></td></tr>
<tr><td><b>Order Date:</b> <?php echo $order[ 'odate' ];
?></td></tr>
<tr><td><b>Status:</b> <?php echo $order[ 'status' ];
?></td></tr>
<tr><td><b>Payment Status:</b> <?php echo $order[ 'pstatus' ];
?></td></tr>
</table>

<h3>Items</h3>
<table border = '1'>
<tr>
<th>Item</th>
<th>Qty</th>
<th>Amount</th>
<th>Total</th>
</tr>

<?php
$grand = 0;
while ( $row = mysqli_fetch_array( $item_res ) ) {
    $total = $row[ 'order_qty' ] * $row[ 'amt' ];
    // FIXED
    $grand += $total;
    ?>
    <tr>
    <td><?php echo $row[ 'iname' ];
    ?></td>
    <td><?php echo $row[ 'order_qty' ];
    ?></td>
    <td><?php echo $row[ 'amt' ];
    ?></td>
    <td><?php echo $total;
    ?></td>
    </tr>
    <?php }
    ?>

    <tr class = 'total-row'>
    <td colspan = '3' align = 'right'>Grand Total</td>
    <td><?php echo $grand;
    ?></td>
    </tr>
    </table>
    <a class = 'btn' href = 'retailerhome.php'>Go Home</a>
    <a class = 'btn' style = 'float:right' href = "pay.php?oid=<?php echo $oid; ?>&tamt=<?php echo $grand; ?>" class = 'pay-link'>Pay Online</a> &nbsp;
    &nbsp;
    <a class = 'btn' style = 'float:right' href = "codpay.php?oid=<?php echo $oid; ?>&tamt=<?php echo $grand; ?>" class = 'pay-link'>Pay COD</a>
    </div>

    </body>
    </html>
