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

  <style>
.order-container {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1);
  margin-bottom: 40px;
}

.order-header {
  font-size: 1.3rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 15px;
}

.table-custom {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

.table-custom th {
  background-color: #4b8ef1;
  color: #fff;
  text-align: left;
  padding: 10px;
  font-weight: 500;
}

.table-custom td {
  background: #f9f9f9;
  padding: 10px;
  border-bottom: 1px solid #e0e0e0;
  vertical-align: middle;
}

.table-custom img {
  border-radius: 8px;
}

.action-links a {
  background: #4b8ef1;
  color: #fff;
  text-decoration: none;
  padding: 6px 14px;
  border-radius: 6px;
  margin: 2px;
  display: inline-block;
  transition: 0.3s ease;
}

.action-links a:hover {
  background: #2563eb;
}

.status-label {
  font-weight: 500;
  color: #333;
  background: #e9efff;
  padding: 5px 10px;
  border-radius: 6px;
  display: inline-block;
}

.inner-table {
  margin-top: 15px;
  border-radius: 8px;
  overflow: hidden;
}
</style>

<div class="order-container">
  <table class="table-custom">
    <thead>
      <tr>
        <th>Retailer</th>
        <th>Items</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
    
      include ('DatabaseCon.php');
      $db = new DatabaseCon();
      
      $s = "select * from orderm where wid=".$_SESSION['uid']."";
      $rs = $db->selectData($s);
      
      while ($row1 = mysqli_fetch_array($rs)) {
      ?>
      <tr>
     <?php
      $s1 = "select * from retailer where rtid in (select uid from orderm where wid=".$_SESSION['uid'].")";
      $rss = $db->selectData($s1);
      $row2 = mysqli_fetch_array($rss)
      ?>
        <td><span class="status-label"><?php echo $row2['name']; ?></span></td>

        <td>
          <div class="inner-table">
            <table class="table-custom">
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
                $tamt = 0;
                $ostatus = "";
                $pstatus = "";
                $oid = 0;
                $s1 = "select * from orderc 
                       inner join item on item.icode = orderc.icode 
                       inner join orderm on orderm.oid = orderc.oid 
                       where orderm.oid=".$row1['oid'];
                $rs1 = $db->selectData($s1);
                while ($row = mysqli_fetch_array($rs1)) {
                 $tamt += ($row['amt'] * $row['qty']);
                  $oid = $row['oid'];
                  $ostatus = $row['status'];
                  $pstatus = $row['pstatus'];
              ?>
              <tr>
                <td><a target="_blank" href="<?php echo $row['file']; ?>"><img src="<?php echo $row['file']; ?>" width="80" height="80"></a></td>
                <td><?php echo $row['iname']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td>₹<?php echo $tamt; ?></td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </td>

       <td class="action-links">
  <?php if($ostatus=="requested"){ ?>

      <a href="rejectreq.php?id=<?php echo $oid;?>">Reject</a>
      <a href="acceptreq.php?id=<?php echo $oid;?>">Accept and Send Invoice</a>

  <?php } else if($ostatus=="Accepted"){ ?>

      <!-- Add Invoice Button -->
     

      <?php if($pstatus=="paid" || $pstatus=="cod") { ?>
          <a href="dstatus.php?id=<?php echo $oid;?>">Deliver</a>
      <?php }else{ ?>
 <span class="status-label"><?php echo $ostatus;?></span>
   <?php } ?>
  <?php } else if($ostatus=="Delivered"){ ?>

      <span class="status-label">Delivered</span>

  <?php }else { ?>
 <span class="status-label"><?php echo $ostatus;?></span>
   <?php } ?>
</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</div>

