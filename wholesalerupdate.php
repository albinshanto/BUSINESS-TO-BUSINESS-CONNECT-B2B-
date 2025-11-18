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
              <li class="nav-item active"><a class="nav-link" href="wholesalerhome.php">HOME</a></li>
               <li class="nav-item"><a class="nav-link" href="product.php">PRODUCT </a></li>
                <li class="nav-item"><a class="nav-link" href="wviewretailer.php">RETAILER </a></li>
                <li class="nav-item"><a class="nav-link" href="wholesalerupdate.php">MY PROFILE </a></li>
                <li class="nav-item"><a class="nav-link" href="wvrequest.php">REQUEST </a></li>
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
<form action="wholesalerupdateaction.php" class="form-contact contact_form"  id="wholesalerupdateform" novalidate="novalidate">
  <?php
  include('DatabaseCon.php');
     $db=new DatabaseCon();
     session_start();
     $uid=$_SESSION['uid'];
    $s = "select * from wholesaler where wid='$uid'";
    $rs = $db->selectData($s);
    $row = mysqli_fetch_array($rs);
  ?>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <input class="form-control" type="text" name="t1" value="<?php echo $row['shname'];?>" placeholder="Shop Name">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t2" value="<?php echo $row['oname'];?>" placeholder="Owner Name">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t3" value="<?php echo $row['address'];?>" placeholder="Address">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t4" value="<?php echo $row['dist'];?>" placeholder="District">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t5" value="<?php echo $row['pincode'];?>" placeholder="Pin Code">
      </div>
    </div>

    <div class="col-lg-6">
      <div class="form-group">
        <input class="form-control" type="email" name="t6" value="<?php echo $row['email'];?>" placeholder="Email">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t7" value="<?php echo $row['phno'];?>" placeholder="Phone Number">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t8" value="<?php echo $row['lno'];?>" placeholder="Licence Number">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="t9" value="<?php echo $row['gstno'];?>" placeholder="GST Number">
      </div>
    </div>
  </div>

  <div class="form-group text-center mt-4">
    <button type="submit" class="button button--active button-contactForm">Update</button>
  </div>
</form>

</form>
