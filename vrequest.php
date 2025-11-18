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
               <li class="breadcrumb-item"><a href="#">Home</a></li> -->
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
<!-- <form action="retaileraction.php" class="form-contact contact_form" id="retailerForm" novalidate="novalidate"> -->
  <!-- WHOLESALER DETAILS TABLE (Styled like your form design) -->
<!-- WHOLESALER LIST PAGE -->
<style>
  /* Table container */
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

  /* Header */
  .styled-table thead tr {
    background-color: #007bff;
    color: #ffffff;
    text-align: center;
    font-weight: bold;
  }

  .styled-table th,
  .styled-table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    vertical-align: middle;
  }

  /* Image cell */
  .styled-table img {
    border-radius: 8px;
    transition: transform 0.3s ease;
  }
  .styled-table img:hover {
    transform: scale(1.1);
  }

  /* Hover row effect */
  .styled-table tbody tr:hover {
    background-color: #f1f7ff;
  }

  /* Alternate row color */
  .styled-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  /* Total section style */
  .total-row td {
    font-weight: 600;
    color: #333;
    background-color: #f0f8ff;
  }
</style>

<!-- PHP Table with Styled Class -->
<table class="styled-table">
  <thead>
    <tr>
      <th>IMAGE</th>
      <th>ITEM</th>
      <th>QUANTITY</th>
      <th>TOTAL AMOUNT</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $tamt = 0;
      $s1 = "select * from orderc 
              inner join item on item.icode = orderc.icode 
              inner join orderm on orderm.oid=orderc.oid 
              where item.wid=".$row1['wid']." 
              and orderm.uid=".$_SESSION['uid'];
      $rs1 = $db->selectData($s1);
      while ($row = mysqli_fetch_array($rs1)) {
          $tamt += ($row['amt'] * $row['mqty']);
    ?>
    <tr>
      <td>
        <a target="_blank" href="<?php echo $row['file']; ?>">
          <img src="<?php echo $row['file']; ?>" width="100" height="100" alt="Item Image" />
        </a>
      </td>
      <td><?php echo $row['iname']; ?></td>
      <td><?php echo $row['mqty']; ?></td>
      <td><?php echo $row['tamt']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


</form>
