<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////	forma parte del header 		-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/bootstrap.min.css');?>">
</head>
<body>
<!-- ////////////////////////////////////////////////////// fin del header 				 -->
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////contenido home 				-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/estilos.css');?>">
	<section class="headerIMG">
		<img src="<?php echo base_url('assets/img/');?>img/home/fondoHeaderHome.jpg" alt="banner">
		<div class="col-xs-12 centenHeader">
			<div class="col-xs-2 text-right BorderR"><strong>WAPIK</strong></div>
			<div class="col-xs-3">
				<img src="<?php echo base_url('assets/img/img/home/cell.png');?>" alt="cell">
				<span id="telefonoHeader"></span> <!--Dinamico-->
			</div>
			<div class="col-xs-7 text-right">
				<ul class="pull-right">
					<li><a href="<?php echo base_url();?>">HOME</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/AboutUs');?>">ABOUT US</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/Pricing');?>">Pricing</a></li>
					<li><a href="<?php echo base_url('index.php/Wapik/ContactUs');?>">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</section>
	<div class="container contenidoH">
		<section class="row">
			<div class="conteTextHeader">
				<h1>Welcome to Wapik</h1>
				<div class="row">
					<p class="col-xs-5">Wapik is multipurpose template, with modern and smart design. W</p>
				</div>
				<div class="row" style="margin-left:0px;"><button class="btn-success">LEARN MORE</button></div>
			</div>
		</section>
	</div>








	<section style="margin-top:60px;" class="text-center">
		<div class="container HblankSection">


			<section class="row" style="margin-top:60px;">
				<div class="container text-center">
					<div class="contVenta" id="CargarPlan">
		

					</div>
				</div>
			</section>

			<section class="row" style="margin-top:100px;">
				<div class="container">
					<section class="row text-center">
						<h4 class="titles">Included with all Plans</h4>
					</section>
					<section class="row" style="margin-top:60px;">
						<div class="container">
							<div class="col-xs-12 listaHomeCheck text-left" id="CargarInclude">

							</div>
						</div>
					</section>

					<section class="row" style="margin-top:60px; margin-bottom: 50px;">
						<div class="container text-center">
							<img src="<?php echo base_url('assets/img/img/home/help.jpg');?>" alt="help">
							<div class="row">
								<div class="container">
									<p class="col-xs-6 col-xs-offset-3">Contact our Customer Support that is always ready to help you with any possible questions, problems or information.</p>
								</div>
							</div>
							<p style="margin-top:20px;"><strong class="titles">support@wapik.com</strong></p>
						</div>
					</section>
				</div>
			</section>
		</div>
	</section>


	<section>
		<img src="<?php echo base_url('assets/img/img/contactUS/fblancoCU.jpg');?>" alt="bb" class="fverdeAU">
		<div class="container">
			<div class="col-xs-12" style="color: #FFF; margin-top:5%;">
				<div class="col-xs-8">
					<h3 class="titles">Do You Like Wapik? Download it Now</h3>
					<p class="titles">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
				<div class="col-xs-4">
					<button class="btnAUFv">download now! - FREE forever</button>
				</div>
			</div>
		</div>
	</section>

	<section style="margin-top:120px;">
		<div class="container FinalAU">
			<div class="col-xs-3">
				<h4 class="titles">WAPIK</h4>
				<p id="correoFooter"></p> <!--Dinamico-->
				<p id="telefonoFooter"></p> <!--Dinamico-->
				<p id="direccionFooter"></p> <!--Dinamico-->
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
<script src="<?= base_url('assets/js/LoadDataHome.js');?>"></script>