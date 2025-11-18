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
	<!-- -<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>RETAILER REGISTRATION</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active" aria-current="page">Contact Us</li> -->
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section> -->
	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
      
       
        
        
      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
          
          </div>
        </div>
        <div class="col-md-12 col-lg-12">
        
         <!-- RETAILER REGISTRATION FORM (Styled like Contact Form) -->
<!-- <form action="retaileraction.php" class="form-contact contact_form" id="retailerForm" novalidate="novalidate"> -->
  <!-- WHOLESALER DETAILS TABLE (Styled like your form design) -->
<!-- WHOLESALER LIST PAGE -->
<form action="payact.php"  class="form-contact contact_form" id="paymentForm" novalidate="novalidate">
  <input type="hidden" name="oid" value="<?php echo $_GET['oid']; ?>" />

  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow p-4 rounded-3 border-0">
        <h3 class="text-center mb-4">Payment Details</h3>

        <div class="form-group mb-3">
          <label for="vnm" class="form-label fw-semibold">Card Number</label>
          <input
            type="text"
            class="form-control"
            name="vnm"
            id="vnm"
            pattern="[0-9]{12}"
            maxlength="12"
            title="Maximum 12 digits"
            placeholder="Enter 12-digit card number"
            required
          />
        </div>

        <div class="form-group mb-3">
          <label for="bnm" class="form-label fw-semibold">CVV</label>
          <input
            type="password"
            class="form-control"
            name="bnm"
            id="bnm"
            pattern="[0-9]{3}"
            maxlength="3"
            title="Maximum 3 digits"
            placeholder="Enter 3-digit CVV"
            required
          />
        </div>

        <div class="form-group mb-3">
          <label for="edate" class="form-label fw-semibold">Expiry Date</label>
          <input
            type="month"
            class="form-control"
            name="edate"
            id="edate"
            required
            min="<?php echo Date('Y-m-d'); ?>"
          />
        </div>

        <div class="form-group mb-4">
          <label for="stnm" class="form-label fw-semibold">Total Amount</label>
          <input
            type="text"
            class="form-control"
            name="stnm"
            id="stnm"
            required
            value="<?php echo $_GET['tamt']; ?>"
            readonly
          />
        </div>

        <div class="text-center">
          <button type="submit" class="button button--active button-contactForm px-4 py-2">
            Pay & Confirm Order
          </button>
        </div>
      </div>
    </div>
  </div>
</form>



</form>
