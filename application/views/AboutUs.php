<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////	forma parte del header 		-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About US</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/bootstrap.min.css');?>">
</head>
<body>
<!-- ////////////////////////////////////////////////////// fin del header 				 -->
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////contenido home 				-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/estilos.css');?>">
	<section class="headerIMG">
		<img src="<?php echo base_url('assets/img/img/home/fondoHeaderHome.jpg');?>" alt="banner">
		<div class="col-xs-12 centenHeader">
			<div class="col-xs-2 text-right BorderR"><strong>WAPIK</strong></div>
			<div class="col-xs-3">
				<img src="<?php echo base_url('assets/img/img/home/cell.png');?>" alt="cell">
				<!--CARGA DINAMICA -->
				<span id="telefonoHeader"></span>
			</div>
			<div class="col-xs-7 text-right">
				<ul class="pull-right">
					<li><a href="<?php echo base_url();?>">HOME</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/AboutUs');?>">About Us</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/Pricing');?>">Pricing</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/ContactUs');?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</section>
	<div class="container contenidoH">
		<section class="row">
			<div class="text-center headerAboutUs">
				<h1>Cras justo odio, dapibus ac facilisis in</h1>
				<h1>egestas eget quam</h1>
				<button class="btn-success">Start Your Free Trial</button>
			</div>
		</section>
	</div>
	<div class="container fullCont">
		<section class="row text-center">
			<h2 class="titles">Best of our features</h2>
			<p class="col-xs-6 col-xs-offset-3" id="Best_of_our_features"></p>
		</section>






		<!--CARGA DINAMICA -->
		<section class="row" style="margin-top: 50px;">
			<div class="container text-center">
				<div class="col-xs-12" id="CargarCont">
					
				
				</div>
			</div>
		</section>
	</div>

	<section style="margin-top: 120px; background: #eef1ec; padding-bottom:100px;">
			<div class="container section2AU">
				<section class="row text-center" style="margin-top:30px;">
					<h2 class="titles">Meet Our Team</h2>
					<p class="col-xs-6 col-xs-offset-3" id="Meet_Our_Team"></p>
				</section>






				<!--CARGA DINAMICA -->
				<section class="row" style="margin-top:60px;">
					<div class="container">
						<div class="col-xs-12" id="CargarTeam">
				
					
				
						</div>
					</div>
				</section>
			</div>
	</section>


	<section>
		<img src="<?php echo base_url('assets/img/img/aboutUs/fverdeAU.jpg');?>" alt="bb" class="fverdeAU">
		<div class="container">
			<div class="col-xs-12" style="color: #FFF; margin-top:5%;">
				<div class="col-xs-8">
					<h3>Do You Like Wapik? Download it Now</h3>
					<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
				<div class="col-xs-4">
					<button class="btnAUFv">download now! - FREE forever</button>
				</div>
			</div>
		</div>
	</section>

	<section style="margin-top:120px;">
		<div class="container FinalAU">
			<!--CARGA DINAMICA -->
			<div class="col-xs-3">
				<h4 class="titles">WAPIK</h4>
				<p id="correoFooter"></p>
				<p id="telefonoFooter"></p>
				<p id="direccionFooter"></p>
			</div>
			<div class="col-xs-3">
				<h4 class="titles">Company</h4>
				<ul class="menuAuInf">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">pricing</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-xs-3">
				<h4 class="titles">Others</h4>
				<ul class="menuAuInf">
					<li><a href="#">Help & Support</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Sitemap</a></li>
				</ul>

			</div>
			<div class="col-xs-3">
				<h4 class="titles">Newsletter</h4>
				<p>Subscribe to our newsletter and get all the cool news</p>
				<div>
					<input type="text" placeholder="Enter Email" class="form-control" style="background: #eef1ec;">
					<img src="<?php echo base_url('assets/img/img/aboutUs/send.png');?>" alt="send" class="sendAU">
					<img src="<?php echo base_url('assets/img/img/aboutUs/social.jpg');?>" alt="social" style="margin-top:100px; float: right;">
				</div>
			</div>
		</div>
	</section>

<!-- ////////////////////////////////////////////////////// fin del home 				 -->
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////  forma parte del footer		-->
</body>
</html>
<!-- ////////////////////////////////////////////////////// fin del footer 				 -->
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/LoadDataAboutUs.js');?>"></script>