<?php
session_start();
include( 'DatabaseCon.php' );
$db = new DatabaseCon();

$tamt = 0;
$ostatus = '';
$pstatus = '';
$oid = 0;

if ( !isset( $_SESSION[ 'uid' ] ) ) {
    echo 'Session expired. Please log in again.';
    exit;
}
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<script type = 'text/javascript'>

function preventBack() {
    window.history.forward();
}
setTimeout( 'preventBack()', 0 );
window.onunload = function () {
    null }
    ;
    </script>

    <meta charset = 'UTF-8'>
    <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <title>Aroma Shop - Home</title>

    <link rel = 'icon' href = 'img/Fevicon.png' type = 'image/png'>
    <link rel = 'stylesheet' href = 'vendors/bootstrap/bootstrap.min.css'>
    <link rel = 'stylesheet' href = 'vendors/fontawesome/css/all.min.css'>
    <link rel = 'stylesheet' href = 'vendors/themify-icons/themify-icons.css'>
    <link rel = 'stylesheet' href = 'vendors/nice-select/nice-select.css'>
    <link rel = 'stylesheet' href = 'vendors/owl-carousel/owl.theme.default.min.css'>
    <link rel = 'stylesheet' href = 'vendors/owl-carousel/owl.carousel.min.css'>
    <link rel = 'stylesheet' href = 'css/style.css'>

    <style>
    .order-container {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba( 0, 0, 0, 0.08 );
        margin: 30px auto;
        width: 95%;
    }

    .table-custom {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 25px;
    }

    .table-custom th {
        background-color: #4b8ef1;
        color: #fff;
        padding: 10px;
        font-weight: 500;
    }

    .table-custom td {
        padding: 10px;
        background-color: #f9f9f9;
        border-bottom: 1px solid #e0e0e0;
    }

    .table-custom tr:hover td {
        background-color: #eef4ff;
    }

    .table-custom img {
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba( 0, 0, 0, 0.1 );
    }

    .status-text {
        font-weight: 600;
        color: #2563eb;
        background: #eaf1ff;
        padding: 5px 12px;
        border-radius: 8px;
        display: inline-block;
    }

    .pay-link {
        background: #4b8ef1;
        color: #fff;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 25px;
        font-weight: 500;
        transition: 0.3s;
        margin-left: 10px;
    }

    .pay-link:hover {
        background: #2563eb;
    }

    .text-right {
        text-align: right;
    }
    </style>
    </head>

    <body>

    <header class = 'header_area'>
    <div class = 'main_menu'>
    <nav class = 'navbar navbar-expand-lg navbar-light'>
    <div class = 'container'>
    <a class = 'navbar-brand logo_h' href = 'retailerhome.php'>
    <img src = 'img/logo.png' alt = ''>
    </a>

    <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse'
    data-target = '#navbarSupportedContent'>
    <span class = 'icon-bar'></span>
    <span class = 'icon-bar'></span>
    <span class = 'icon-bar'></span>
    </button>

    <div class = 'collapse navbar-collapse offset' id = 'navbarSupportedContent'>
    <ul class = 'nav navbar-nav menu_nav ml-auto mr-auto'>
    <li class = 'nav-item active'><a class = 'nav-link' href = 'retailerhome.php'>HOME</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'rviewwholesaler.php'>WHOLESALER</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'allproduct.php'>PRODUCTS</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'viewcart.php'>MY CART</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'feedback.php'>FEEDBACK</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'myorder.php'>MY ORDER</a></li>
    <li class = 'nav-item'><a class = 'nav-link' href = 'index.php'>LOGOUT</a></li>
    </ul>

    <ul class = 'nav-shop'></ul>
    </div>
    </div>
    </nav>
    </div>
    </header>

    <section class = 'section-margin--small'>
    <div class = 'container'>
    <div class = 'row'>
    <div class = 'col-md-12 col-lg-12'>

    <div class = 'order-container'>
    <table class = 'table-custom'>
    <thead>
    <tr>
    <th>Wholesaler</th>
    <th>Items</th>
    <th>Status</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $s = 'SELECT * FROM orderm WHERE uid=' . $_SESSION[ 'uid' ];
    $rs = $db->selectData( $s );

    while ( $row1 = mysqli_fetch_array( $rs ) ) {
        ?>

        <tr>
        <?php
        $s2 = 'SELECT * FROM wholesaler  WHERE wid IN (SELECT wid FROM orderm WHERE uid=' . $_SESSION[ 'uid' ] . ')';
        $rs3 = $db->selectData( $s2 );
        $row3 = mysqli_fetch_array( $rs3 );
        ?>
        <td><?php echo $row3[ 'shname' ];
        ?></td>

        <td>
        <table class = 'table-custom'>
        <thead>
        <tr>
        <th>Image</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Total Amount</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $s1 = "SELECT 
            orderc.qty AS order_qty,
            item.mqty AS item_stock,
            orderc.*, 
            item.*, 
            orderm.*
        FROM orderc
        INNER JOIN item ON item.icode = orderc.icode
        INNER JOIN orderm ON orderm.oid = orderc.oid
        WHERE orderm.oid = " . $row1[ 'oid' ];
        $rs1 = $db->selectData( $s1 );

        // Reset amount for each wholesaler
        $tamt = 0;

        while ( $row = mysqli_fetch_array( $rs1 ) ) {
            $itemTotal = $row[ 'amt' ] * $row[ 'order_qty' ];
            $tamt += $itemTotal;
            $ostatus = $row[ 'status' ];
            $pstatus = $row[ 'pstatus' ];
            $oid = $row[ 'oid' ];
            ?>

            <tr>
            <td><img src = "<?php echo $row['file']; ?>" width = '100' height = '100'></td>
            <td><?php echo $row[ 'iname' ];
            ?></td>
            <td><?php echo $row[ 'order_qty' ];
            ?></td>
            <td>₹<?php echo $itemTotal;
            ?></td>
            </tr>

            <?php }
            ?>
            </tbody>
            </table>
            </td>

            <td class = 'text-right'>
            <span class = 'status-text'>Status: <?php echo $ostatus;
            ?></span>

            <?php if ( $ostatus == 'Accepted' && $pstatus == 'pending' ) {
                ?>
                <a href = "addinvoice.php?oid=<?php echo $oid; ?>" class = 'pay-link'>Invoice</a>

                <?php }
                ?>
                </td>

                </tr>

                <?php }
                ?>
                </tbody>
                </table>
                </div>

                </div>
                </div>
                </div>
                </section>

                </body>
                </html>
