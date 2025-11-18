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
<style>
/* Table Container */
.table-container {
  max-width: 1000px;
  margin: 40px auto;
  background: #ffffff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  font-family: "Poppins", sans-serif;
}

/* Table Styling */
.table-container table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  font-size: 15px;
}

.table-container th,
.table-container td {
  padding: 12px 15px;
  border-bottom: 1px solid #e6e6e6;
}

.table-container th {
  background-color: #007bff;
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.table-container tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table-container tr:hover {
  background-color: #eef6ff;
  transition: 0.3s;
}

/* Header Title */
.table-container h3 {
  text-align: center;
  margin-bottom: 20px;
  color: #007bff;
  font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
  .table-container table, 
  .table-container thead, 
  .table-container tbody, 
  .table-container th, 
  .table-container td, 
  .table-container tr {
    display: block;
    width: 100%;
  }

  .table-container tr {
    margin-bottom: 15px;
    background: #f9f9f9;
    border-radius: 10px;
    padding: 10px;
  }

  .table-container td {
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  .table-container td::before {
    content: attr(data-label);
    position: absolute;
    left: 15px;
    width: 45%;
    font-weight: 600;
    text-transform: uppercase;
    color: #333;
    text-align: left;
  }

  .table-container th {
    display: none;
  }
}
</style>

<div class="table-container">
  <h3>Retailer List</h3>
  <table>
    <tr>
      <th>NAME</th>
      <th>ADDRESS</th>
      <th>DISTRICT</th>
      <th>PIN CODE</th>
      <th>PHONE NUMBER</th>
      <th>EMAIL</th>
    </tr>

    <?php
    include ('DatabaseCon.php');
    $db=new DatabaseCon;
    $sql="select * from retailer";
    $rs=$db->selectData($sql);
    while($row=mysqli_fetch_array($rs))
    { ?>
      <tr>
        <td data-label="Name"><?php echo $row['name']?></td>
        <td data-label="Address"><?php echo $row['address']?></td>
        <td data-label="District"><?php echo $row['district']?></td>
        <td data-label="Pin Code"><?php echo $row['pincode']?></td>
        <td data-label="Phone Number"><?php echo $row['phn']?></td>
        <td data-label="Email"><?php echo $row['email']?></td>
      </tr>
    <?php } ?>
  </table>
</div>

</form>
