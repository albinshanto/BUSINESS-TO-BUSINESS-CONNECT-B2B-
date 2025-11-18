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
  <title>Aroma Shop - Add Product</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  $('#category').on('change', function() {
    var catid = $(this).val();

    if (catid) {
      $.ajax({
        type: 'POST',
        url: 'get_subcategories.php',
        data: { catid: catid },
        success: function(html) {
          $('#subcategory').html(html);
        }
      });
    } else {
      $('#subcategory').html('<option value="">Select Subcategory</option>');
    }
  });
});
</script>
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
              <li class="nav-item active"><a class="nav-link" href="wholesalerhome.php">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="product.php">PRODUCT</a></li>
              <li class="nav-item"><a class="nav-link" href="wviewretailer.php">RETAILER</a></li>
              <li class="nav-item"><a class="nav-link" href="wholesalerupdate.php">MY PROFILE</a></li>
              <li class="nav-item"><a class="nav-link" href="wvrequest.php">REQUEST</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php">LOGOUT</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>ADD PRODUCT</h1>
         <button style="background-color:blue"> <a href="wvproduct.php">VIEW PRODUCT</a></buttton>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<!-- ================ Add Product Form Section ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          
          <style>
          .form-area {
            background: #f9f9f9;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            font-family: "Poppins", sans-serif;
          }
          .form-area h3 {
            text-align:center;
            margin-bottom:25px;
            color:#007bff;
          }
          .form-area table {
            width:100%;
          }
          .form-area th {
            padding:10px;
            text-align:left;
            color:#333;
            width:35%;
          }
          .form-area td {
            padding:10px;
          }
          .form-area input[type="text"],
          .form-area input[type="file"],
          .form-area select,
          .form-area textarea {
            width:100%;
            padding:10px 12px;
            border:1px solid #ddd;
            border-radius:6px;
            transition:0.3s;
            font-size:15px;
          }
          .form-area input:focus,
          .form-area select:focus,
          .form-area textarea:focus {
            border-color:#007bff;
            outline:none;
            box-shadow:0 0 5px rgba(0,123,255,0.3);
          }
          .form-area input[type="submit"] {
            background-color:#007bff;
            color:#fff;
            border:none;
            padding:10px 30px;
            border-radius:8px;
            font-size:16px;
            transition:0.3s;
            cursor:pointer;
          }
          .form-area input[type="submit"]:hover {
            background-color:#0056b3;
            box-shadow:0 3px 10px rgba(0,0,0,0.2);
          }
          </style>

          <?php
          include('DatabaseCon.php');
          $db=new DatabaseCon;
          ?>

          <form action="productaction.php" method="post" class="form-area" enctype="multipart/form-data">
            <h3>Add New Product</h3>
            <table>
              <tr>
                <th>ITEM CODE</th>
                <td><input type="text" name="t1" placeholder="Enter item code" required></td>
              </tr>
              <tr>
                <th>ITEM NAME</th>
                <td><input type="text" name="iname" pattern="^[A-Za-z\s,]+$" title="Enter only alphabets, commas, and spaces" required placeholder="Enter item name"></td>
              </tr>
              <tr>
      <th>CATEGORY</th>
      <td>
        <select name="category" id="category" required>
          <option value="">Select Category</option>
          <?php
          $rs1 = $db->selectData("select * from category");
          while ($rw = mysqli_fetch_array($rs1)) {
            echo "<option value='{$rw['catid']}'>{$rw['cname']}</option>";
          }
          ?>
        </select>
      </td>
    </tr>

    <tr>
      <th>SUBCATEGORY</th>
      <td>
        <select name="subcategory" id="subcategory" required>
          <option value="">Select Subcategory</option>
        </select>
      </td>
    </tr>
              <tr>
                <th>DETAILS</th>
                <td><textarea name="dtls" rows="4" pattern="^[A-Za-z\s,]+$" required placeholder="Enter item details"></textarea></td>
              </tr>
              <tr>
                <th>AMOUNT</th>
                <td><input type="text" name="amt" placeholder="Enter amount" required></td>
              </tr>
              <tr>
                <th>STOCK</th>
                <td><input type="text" name="stock" pattern="[0-9]{1,10}" required placeholder="Enter available stock"></td>
              </tr>
              <tr>
                <th>MINIMUM QUANTITY</th>
                <td><input type="text" name="mqty" pattern="[0-9]{1,10}" required placeholder="Enter minimum order quantity"></td>
              </tr>
              <tr>
                <th>IMAGE</th>
                <td><input type="file" name="file" accept="image/*" required></td>
              </tr>
              <tr>
                <td colspan="2" style="text-align:center;">
                  <input type="submit" value="Add Product">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--================ Start footer Area  =================-->
	<!-- <footer>
		<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>Delivering quality wholesale services and strong retailer partnerships for better business growth.</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="wholesalerhome.php">Home</a></li>
								<li><a href="product.php">Product</a></li>
								<li><a href="wviewretailer.php">Retailer</a></li>
								<li><a href="wholesalerupdate.php">My Profile</a></li>
								<li><a href="wvrequest.php">Requests</a></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<p><i class="fa fa-location-arrow"></i> 123, Main Street, Your City</p>
							<p><i class="fa fa-phone"></i> +91 98765 43210</p>
							<p><i class="fa fa-envelope"></i> info@aromashop.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Aroma Shop
					</p>
				</div>
			</div>
		</div>
	</footer> -->
	<!--================ End footer Area  =================-->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
