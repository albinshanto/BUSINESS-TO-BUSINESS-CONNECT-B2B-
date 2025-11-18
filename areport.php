<?php
session_start();
include('DatabaseCon.php');
$db = new DatabaseCon();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Shop - Reports</title>

    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- ================= TEMPLATE TABLE STYLE ================= -->
    <style>
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .styled-table thead tr {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
        }
        .styled-table th, .styled-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        .styled-table tbody tr:hover {
            background-color: #f1f7ff;
        }
        .styled-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-view {
            background: #007bff;
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            text-decoration: none;
        }
        .btn-view:hover {
            background: #0056cc;
        }

        .container-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-top: 25px;
        }
    </style>

</head>

<body>

<!-- ================= HEADER ================= -->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="adminhome.php"><img src="img/logo.png" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="adminhome.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="aviewwholesaler.php">WHOLESALER</a></li>
                        <li class="nav-item"><a class="nav-link" href="aviewretailer.php">RETAILER</a></li>
                        <li class="nav-item"><a class="nav-link" href="category.php">CATEGORY</a></li>
                        <li class="nav-item"><a class="nav-link" href="subcategory.php">SUBCATEGORY</a></li>
                        <li class="nav-item"><a class="nav-link" href="areport.php">REPORTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<!-- ================= REPORT SECTION ================= -->
<div class="container container-box">

    <h2 class="text-center mb-4">Wholesaler Order Report</h2>

    <!-- SEARCH BAR -->
    <form method="post" class="mb-4">
        <input type="text" name="keyword" class="form-control" placeholder="Search wholesaler name or district">
        <br>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $keyword = $_POST['keyword'];

    $wholesaler_sql = "
        SELECT * FROM wholesaler 
        WHERE shname LIKE '%$keyword%' OR dist LIKE '%$keyword%'
    ";
    $wh_res = $db->selectData($wholesaler_sql);

    if (mysqli_num_rows($wh_res) == 0) {
        echo "<div class='alert alert-danger'>No wholesalers found</div>";
    }

    while ($wh = mysqli_fetch_array($wh_res)) {
?>

<h4 class="mt-4"><b>Wholesaler:</b> <?php echo $wh['shname']; ?></h4>

<table class="styled-table">
<thead>
<tr>
    <th>Order ID</th>
    <th>Date</th>
    <th>Retailer</th>
    <th>Total Qty</th>
    <th>Total Amount</th>
    <th>Status</th>
    <th>Payment</th>
    <th>View Items</th>
</tr>
</thead>

<tbody>
<?php
$order_sql = "
    SELECT orderm.*, retailer.name AS retailer_name
    FROM orderm
    INNER JOIN retailer ON retailer.rtid = orderm.uid
    WHERE orderm.wid=".$wh['wid'];

$order_res = $db->selectData($order_sql);

while ($order = mysqli_fetch_array($order_res)) {
?>
<tr>
    <td><?php echo $order['oid']; ?></td>
    <td><?php echo $order['odate']; ?></td>
    <td><?php echo $order['retailer_name']; ?></td>
    <td><?php echo $order['tqty']; ?></td>
    <td>₹<?php echo $order['tamt']; ?></td>
    <td><?php echo $order['status']; ?></td>
    <td><?php echo $order['pstatus']; ?></td>
    <td><a href="admin_view_items.php?oid=<?php echo $order['oid']; ?>" class="btn-view">View</a></td>
</tr>
<?php } ?>
</tbody>
</table>

<?php } } ?>

</div>

</body>
</html>
