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
              <li class="nav-item active"><a class="nav-link" href="adminhome.php">HOME</a></li>
               <li class="nav-item"><a class="nav-link" href="aviewwholesaler.php">WHOLESALER </a></li>
                <li class="nav-item"><a class="nav-link" href="aviewretailer.php">RETAILER </a></li>
                <li class="nav-item"><a class="nav-link" href="category.php">CATEGORY </a></li>
                <li class="nav-item"><a class="nav-link" href="subcategory.php">SUBCATEGORY </a></li>
                <li class="nav-item"><a class="nav-link" href="areport.php">REPORTS</a></li>
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
<!-- RETAILER DETAILS TABLE (Styled like form design) -->
<!-- CATEGORY DETAILS TABLE (Styled like previous forms and tables) -->
<!-- CATEGORY MANAGEMENT PAGE -->
<style>
  /* ======= GENERAL STYLES ======= */
  body {
    font-family: "Poppins", sans-serif;
    background: #f8f9fa;
    margin: 0;
    padding: 0;
  }

  h2.page-title {
    text-align: center;
    margin: 30px 0 20px;
    color: #333;
    font-weight: 600;
  }

  /* ======= FORM STYLE ======= */
  .form-contact {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    padding: 30px;
    max-width: 600px;
    margin: 0 auto 40px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-control {
    width: 100%;
    padding: 10px 14px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: 0.2s;
  }

  .form-control:focus {
    border-color: #009879;
    outline: none;
    box-shadow: 0 0 4px rgba(0, 152, 121, 0.4);
  }

  .button-contactForm {
    background-color: #009879;
    color: white;
    border: none;
    padding: 10px 28px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
  }

  .button-contactForm:hover {
    background-color: #007d63;
  }

  /* ======= TABLE STYLE ======= */
  .styled-table {
    border-collapse: collapse;
    margin: 0 auto 50px;
    font-size: 16px;
    min-width: 80%;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
  }

  .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
    font-weight: 600;
  }

  .styled-table th,
  .styled-table td {
    padding: 12px 15px;
    text-align: center;
  }

  .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    transition: background-color 0.2s ease-in-out;
  }

  .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }

  .styled-table tbody tr:hover {
    background-color: #f1f9f6;
  }

  .btn-delete {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 6px 14px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    transition: background 0.3s ease;
  }

  .btn-delete:hover {
    background-color: #c0392b;
    text-decoration: none;
  }
</style>

<h2 class="page-title">Category Management</h2>

<!-- CATEGORY ADD FORM -->
<form action="categoryaction.php"  class="form-contact contact_form" novalidate="novalidate">
  <div class="form-group">
    <input type="text" name="t1" class="form-control" placeholder="Enter Category Name"
      pattern="^[A-Za-z\s,]+$" title="Enter only alphabets, comma, and space" required>
  </div>
  <div class="form-group text-center">
    <button type="submit" class="button button--active button-contactForm">Add Category</button>
  </div>
</form>

<!-- CATEGORY TABLE -->
<table class="styled-table">
  <thead>
    <tr>
      <th>Category ID</th>
      <th>Category Name</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    <?php
      include('DatabaseCon.php');
      $db = new DatabaseCon;
      $sql = "select * from category";
      $rs = $db->selectData($sql);
      while($row = mysqli_fetch_array($rs)) {
    ?>
    <tr>
      <td><?php echo $row['catid']; ?></td>
      <td><?php echo $row['cname']; ?></td>
      <td><a href="categorydelete.php?id=<?php echo $row['catid']; ?>" class="btn-delete">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
``


</form>
