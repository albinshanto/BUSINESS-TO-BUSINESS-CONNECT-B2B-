<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
/* ---- PAGE ---- */
.cart-container {
  width: 90%;
  margin: 30px auto;
  font-family: "Poppins", sans-serif;
}

/* ---- TITLE ---- */
.cart-title {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
}

/* ---- WHOLESALER CARD ---- */
.wholesaler-card {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  margin-bottom: 25px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* ---- TABLE ---- */
.table-custom {
  width: 100%;
  border-collapse: collapse;
  background: #fafafa;
}

.table-custom th {
  background: #4a4a4a;
  color: white;
  padding: 12px;
  font-size: 15px;
}

.table-custom td {
  padding: 12px;
  border-bottom: 1px solid #ddd;
  vertical-align: middle;
}

.table-custom img {
  border-radius: 8px;
}

/* ---- REMOVE + SAVE BUTTON ---- */
.action-btn {
  color: #e60000;
  text-decoration: none;
  font-weight: bold;
}

.action-btn:hover {
  text-decoration: underline;
}

.save-btn {
  color: #0077cc;
  font-weight: bold;
}

.save-btn:hover {
  text-decoration: underline;
}

/* ---- TOTAL BAR ---- */
.total-bar {
  text-align: right;
  font-size: 20px;
  font-weight: bold;
  padding: 15px 0;
}

/* ---- BUTTONS ---- */
.btn-main {
  background: #ff6600;
  color: white;
  padding: 12px 22px;
  border-radius: 8px;
  border: none;
  font-size: 16px;
  cursor: pointer;
  margin: 10px 5px;
  display: inline-block;
}

.btn-main a {
  color: white;
  text-decoration: none;
}

.btn-secondary {
  background: #444;
  color: white;
  padding: 12px 22px;
  border-radius: 8px;
  font-size: 16px;
  margin: 10px 5px;
  display: inline-block;
}

.btn-secondary a {
  color: white;
  text-decoration: none;
}
</style>

</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="retailerhome.php">HOME</a></li>
               <li class="nav-item"><a class="nav-link" href="rviewwholesaler.php">WHOLESALER </a></li>
               <li class="nav-item"><a class="nav-link" href="allproduct.php">PRODUCTS </a></li>
                <li class="nav-item active"><a class="nav-link" href="viewcart.php">MY CART </a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php">FEEDBACK </a></li>
                <li class="nav-item"><a class="nav-link" href="myorder.php">MY ORDER </a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">LOGOUT</a></li>




                 <!-- <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li> -->
              
             
            
             
              <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
            </ul>

            <ul class="nav-shop">
              
              <!-- <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li> -->
              <!-- <li class="nav-item"><a class="button button-header" href="login.php">LOGIN</a></li> -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->


	<!-- ================ start banner area ================= -->
	<!-- <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>ALL PRODUCT</h1>
         <button style="background-color:blue"> <a href="wvproduct.php">ADD MORE PRODUCTS</a></buttton>
				</div>
			</div>
    </div>
	</section> -->
	<!-- ================ end banner area ================= -->
   <!-- <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>ALL PRODUCT</h1>
       
				</div>
			</div>
    </div>
	</section> -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <!-- <div class="container"> -->
     


      <div class="row">
        <!-- <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
          
          </div>
        </div> -->
        <div class="col-md-12 col-lg-12">



  <div class="cart-container">
  <div class="cart-title">🛒 Your Shopping Cart</div>

  <table class="table-custom">
    <thead>
      <tr>
        <th>Wholesaler</th>
        <th>Items</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include ('DatabaseCon.php');
      $db = new DatabaseCon();

      $s = "SELECT * FROM wholesaler 
            WHERE wid IN (SELECT wid FROM item 
            WHERE icode IN (SELECT icode FROM cart WHERE uid=".$_SESSION['uid']."))";

      $rs = $db->selectData($s);

      while ($row1 = mysqli_fetch_array($rs)) {
      ?>
      <tr>
        <td width="20%">
          <div class="wholesaler-card">
            <strong><?php echo $row1['shname']; ?></strong>
          </div>
        </td>

        <td width="80%">
          <div class="wholesaler-card">
            <table class="table-custom">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $tamt = 0;

              $s1 = "SELECT * FROM cart 
                    INNER JOIN item ON item.icode = cart.icode 
                    INNER JOIN wholesaler ON wholesaler.wid = item.wid 
                    WHERE item.wid = ".$row1['wid']." 
                    AND cart.uid = ".$_SESSION['uid'];

              $rs1 = $db->selectData($s1);

              while ($row = mysqli_fetch_array($rs1)) {
                $total = $row['cqty'] * $row['amt'];
                $tamt += $total;
              ?>
              <tr>
                <td>
                  <a target="_blank" href="<?php echo $row['file']; ?>">
                    <img src="<?php echo $row['file']; ?>" width="80" height="80">
                  </a>
                </td>
                <td><?php echo $row['iname']; ?></td>
                <td><?php echo $row['cqty']; ?></td>
                <td>₹<?php echo $total; ?></td>

                <td>
                  <a class="action-btn" href="cartdelete.php?n=<?php echo $row['cid']; ?>&ic=<?php echo $row['icode']; ?>">Remove</a>
                  <br>
                  <a class="save-btn" href="wishlist.php?n=<?php echo $row['cid']; ?>&ic=<?php echo $row['icode']; ?>">Save for Later</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>

            <div class="total-bar">
              Total: ₹<?php echo $tamt; ?>
            </div>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div style="text-align: right; width: 90%; margin: auto;">
  <button class="btn-main"><a href="payaction.php">PLACE REQUEST</a></button>
  <button class="btn-secondary"><a href="allproduct.php">ADD MORE PRODUCTS</a></button>
</div>


  <div class="cart-container">
  <div class="cart-title">🛒 Items Saved for Later</div>

  <table class="table-custom">
    <thead>
      <tr>
        <th>Wholesaler</th>
        <th>Items</th>
      </tr>
    </thead>
    <tbody>
      <?php


      $s = "SELECT * FROM wholesaler 
            WHERE wid IN (SELECT wid FROM item 
            WHERE icode IN (SELECT icode FROM cartc WHERE uid=".$_SESSION['uid']."))";

      $rs = $db->selectData($s);

      while ($row1 = mysqli_fetch_array($rs)) {
      ?>
      <tr>
        <td width="20%">
          <div class="wholesaler-card">
            <strong><?php echo $row1['shname']; ?></strong>
          </div>
        </td>

        <td width="80%">
          <div class="wholesaler-card">
            <table class="table-custom">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $tamt = 0;

              $s1 = "SELECT * FROM cartc 
                    INNER JOIN item ON item.icode = cartc.icode 
                    INNER JOIN wholesaler ON wholesaler.wid = item.wid 
                    WHERE item.wid = ".$row1['wid']." 
                    AND cartc.uid = ".$_SESSION['uid'];

              $rs1 = $db->selectData($s1);

              while ($row = mysqli_fetch_array($rs1)) {
                $total = $row['cqty'] * $row['amt'];
                $tamt += $total;
              ?>
              <tr>
                <td>
                  <a target="_blank" href="<?php echo $row['file']; ?>">
                    <img src="<?php echo $row['file']; ?>" width="80" height="80">
                  </a>
                </td>
                <td><?php echo $row['iname']; ?></td>
                <td><?php echo $row['cqty']; ?></td>
                <td>₹<?php echo $total; ?></td>

                <td>
                  <a class="action-btn" href="cartdelete.php?n=<?php echo $row['cid']; ?>&ic=<?php echo $row['icode']; ?>">Remove</a>
                  <br>
                  <a class="save-btn" href="movecart.php?n=<?php echo $row['cid']; ?>&ic=<?php echo $row['icode']; ?>">Move to cart</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>

            <div class="total-bar">
              Total: ₹<?php echo $tamt; ?>
            </div>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>


