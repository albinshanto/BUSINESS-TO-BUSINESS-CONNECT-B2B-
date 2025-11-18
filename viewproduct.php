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
              <li class="nav-item active"><a class="nav-link" href="retailerhome.php">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="rviewwholesaler.php">WHOLESALER </a></li>
              <li class="nav-item"><a class="nav-link" href="allproduct.php">PRODUCTS </a></li>
              <li class="nav-item"><a class="nav-link" href="viewcart.php">MY CART </a></li>
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
<section class="section-margin calc-60px">
  <div class="container">
    <div class="section-intro pb-60px text-center">
      <p>Available Products</p>
      <h2>Our <span class="section-intro__style">Products</span></h2>
    </div>

    <div class="row">
      <?php
      include ('DatabaseCon.php');
      $db = new DatabaseCon();
      $uid = $_GET['id'];
      $sql = "SELECT * FROM item 
              INNER JOIN category ON category.catid=item.catid 
              INNER JOIN subcategory ON subcategory.scatid=item.scatid 
              WHERE item.wid='$uid'";

      $rs = $db->selectData($sql);
      while($row = mysqli_fetch_array($rs)) {
      ?>
        <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
          <div class="card text-center card-product" style="border:none; box-shadow:0 0 10px rgba(0,0,0,0.08); border-radius:10px;">
            <div class="card-product__img" style="position:relative;">
              <img class="card-img" src="<?php echo $row['file']; ?>" alt="<?php echo $row['iname']; ?>" style="border-radius:10px 10px 0 0; object-fit:cover; height:220px;">
              <ul class="card-product__imgOverlay" style="list-style:none; position:absolute; top:0; left:0; right:0; bottom:0; margin:0; padding:0; display:flex; align-items:center; justify-content:center; gap:10px; opacity:0; background-color:rgba(0,0,0,0.4); transition:0.3s;">
                <li><button style="background:none; border:none; color:#fff; font-size:18px;"><i class="ti-search"></i></button></li>
                <li><button style="background:none; border:none; color:#fff; font-size:18px;"><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body" style="padding:20px;">
              <p style="color:#6c757d;"><?php echo $row['cname']; ?> / <?php echo $row['sname']; ?></p>
              <h4 class="card-product__title" style="font-size:18px; font-weight:600;">
                <a href="#" style="color:#000;"><?php echo $row['iname']; ?></a>
              </h4>
              <p class="card-product__price" style="color:#007bff; font-size:17px; font-weight:600;">₹<?php echo $row['amt']; ?></p>
              
              <p class="text-muted" style="font-size:14px;"><?php echo $row['details']; ?></p>

              <?php if ($row['stock'] != "0") { ?>
            <form action="cartaction.php" method="get" style="margin-top:10px;">
                <input type="number" min="<?php echo $row['mqty']; ?>" max="<?php echo $row['stock']; ?>" 
                  name="cqty" required 
                  placeholder="Enter Quantity" 
                  class="form-control mb-3" 
                  style="border-radius:5px; border:1px solid #ddd;">
                <input type="hidden" name="icode" value="<?php echo $row['icode']; ?>">
                <input type="hidden" name="amt" value="<?php echo $row['amt']; ?>">
                <button type="submit" class="button button--active button-contactForm" 
                  style="background-color:#007bff; color:#fff; border:none; padding:8px 20px; border-radius:5px; cursor:pointer;">
                  <i class="ti-shopping-cart"></i> Add to Cart
                </button>
              </form>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<style>
.card-product:hover .card-product__imgOverlay {
  opacity: 1;
}
.card-product__imgOverlay li button:hover {
  color: #ffd700;
}
</style>

	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->

