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
              <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
               <li class="nav-item"><a class="nav-link" href="wholesaler.php">WHOLESALER REGISTRATION</a></li>
                <li class="nav-item"><a class="nav-link" href="retailer.php">RETAILER REGISTRATION</a></li>
                 <!-- <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li> -->
              
             
            
             
              <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
            </ul>

            <ul class="nav-shop">
              
              <!-- <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li> -->
              <li class="nav-item"><a class="button button-header" href="login.php">LOGIN</a></li>
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
	</section>
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
<form action="retaileraction.php" class="form-contact contact_form" id="retailerForm" novalidate="novalidate">
  <div class="row">
    <!-- LEFT COLUMN -->
    <div class="col-lg-6">
      <div class="form-group">
        <input type="text" name="t1" class="form-control" placeholder="Retailer Name"
          pattern="^[A-Za-z\s,]+$" title="Enter only alphabets, comma, and space" required>
      </div>

      <div class="form-group">
        <textarea class="form-control different-control w-100" name="message" rows="3"
          placeholder="Address" pattern="^[A-Za-z\s,]+$"
          title="Enter only alphabets, comma, and space" required></textarea>
      </div>

      <div class="form-group">
        <select name="District" class="form-control" required title="Select your district">
          <option value="">Select District</option>
          <option value="Kasargod">Kasargod</option>
          <option value="Kannur">Kannur</option>
          <option value="Wayanad">Wayanad</option>
          <option value="Kozhikode">Kozhikode</option>
          <option value="Malappuram">Malappuram</option>
          <option value="Palakkad">Palakkad</option>
          <option value="Thrissur">Thrissur</option>
          <option value="Ernakulam">Ernakulam</option>
          <option value="Idukki">Idukki</option>
          <option value="Kottayam">Kottayam</option>
          <option value="Alappuzha">Alappuzha</option>
          <option value="Pathanamthitta">Pathanamthitta</option>
          <option value="Kollam">Kollam</option>
          <option value="Thiruvananthapuram">Thiruvananthapuram</option>
        </select>
      </div>

      <div class="form-group">
        <input type="text" name="t3" class="form-control" placeholder="Pincode"
          pattern="[0-9]{6}" maxlength="6" required>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="col-lg-6">
      <div class="form-group">
        <input type="email" name="t4" class="form-control" placeholder="Email Address"
          pattern="[a-z0-9._&+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
          title="Email must be in the format: example@domain.com" required>
      </div>

      <div class="form-group">
        <input type="text" name="t5" class="form-control" placeholder="Phone Number"
          pattern="[0-9]{10}" maxlength="10" title="Enter 10 digits only" required>
      </div>

      <div class="form-group">
        <input type="password" name="t6" class="form-control" placeholder="Password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
          title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters"
          required>
      </div>
    </div>
  </div>

  <div class="form-group text-center text-md-right mt-4">
    <button type="submit" class="button button--active button-contactForm">Register</button>
  </div>
</form>
