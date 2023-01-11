<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>AGROTECH FarmersPortal</title>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   		<script src="bootstrap/js/bootstrap.min.js"></script>		
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="css/indexfooter.css" />
		
	</head>
	<body>
		<?php
				require 'menu.php';
			?>

		<div class="wrapper-wide">
		
			<div id="container">
				<div class="container">
				<!-- Breadcrumb -->
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
				</ul>
				
				<div class="row">
					<div id="content" class="col-sm-9">
					<h1 class="title">Contact Us</h1>
					<h3 class="subtitle">Our Location</h3>
					<div class="row">
						<div class="col-sm-3">
						<img src="images/pic5.jpg" alt="Contact Us" title="Contact Us" class="img-thumbnail" />
						</div>
						<div class="col-sm-3"><strong>AGROTECH FarmersPortal.</strong><br />
						<address>
							Tanor,<br />
							Rajshahi,<br />
							Bangladesh
						</address>
						</div>
						<div class="col-sm-3">
						<strong>Phone Number</strong><br>
						123456789<br />
						</div>
					</div>
					<form class="form-horizontal">
						<fieldset>
						<h3 class="subtitle">Send us an Email</h3>
						<div class="form-group required">
							<label class="col-md-2 col-sm-3 control-label" for="input-name">Your Name</label>
							<div class="col-md-10 col-sm-9">
							<input type="text" name="name" value="" id="input-name" class="form-control" />
							</div>
						</div>
						<div class="form-group required">
							<label class="col-md-2 col-sm-3 control-label" for="input-email">E-Mail Address</label>
							<div class="col-md-10 col-sm-9">
							<input type="text" name="email" value="" id="input-email" class="form-control" />
							</div>
						</div>
						<div class="form-group required">
							<label class="col-md-2 col-sm-3 control-label" for="input-enquiry">Comments</label>
							<div class="col-md-10 col-sm-9">
							<textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
							</div>
						</div>
						</fieldset>
						<div class="buttons">
						<div class="pull-right">
							<input class="btn btn-primary" type="submit" value="Submit" />
						</div>
						</div>
					</form>
					</div>
				</div>
				</div>
			</div>
		</div>

  		<!-- Footer -->
  		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
			<center>
				<h1 style="font: 35px calibri;">About Us</h1>
			</center>
			<div class="footer-left">
				<h3 style="font-family: 'Times New Roman', cursive;">FarmersPortal &copy; </h3>
		   <!-- <div class="logo">
					<a href="index.php"><img src="images/logo.png" width="200px"></a>
				</div>-->
				<br />
				<p style="font-size:20px;color:white">Your product Our market !!!</p>
				<br />
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p style="font-size:20px">Farmers Portal<span>Rajshahi, Bangladesh</span></p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p style="font-size:20px">123456789</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p style="font-size:20px"><a href="mailto:FarmersPortal@gmail.com" style="color:white">demo@demo.com</a></p>
				</div>
			</div>

			<div class="footer-right">
				<p class="footer-company-about" style="color:white">
					<span style="font-size:20px"><b>About FarmersPortal</b></span>
					FarmersPortal is e-commerce trading platform for grains & grocerries...
				</p>
				<div class="footer-icons">
					<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-gmail"></i></a>
					<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-facebook"></i></a>
					<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
</body>
</html>
