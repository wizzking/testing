<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////	forma parte del header 		-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact US</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/bootstrap.min.css');?>">
</head>
<body>
<!-- ////////////////////////////////////////////////////// fin del header 				 -->
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////contenido home 				-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/front/estilos.css');?>">
	<section class="headerIMG">
		<div class="col-xs-12 centenHeader">
			<div class="col-xs-2 text-right BorderR"><strong class="titles">WAPIK</strong></div>
			<div class="col-xs-3">
				<img src="<?php echo base_url('assets/img/img/contactUS/cell.png');?>" alt="cell">
				<span class="titles" id="telefonoHeader"></span>
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

	<section style="margin-top:60px;">
		<img src="<?php echo base_url('assets/img/img/contactUS/mapa.jpg');?>" alt="mapa" style="width: 100%;">
	</section>

	<section style="margin-top:80px;" class="text-center">
		<h2 class="titles">Get In Touch With Us</h2>
		<p id="Get_In_Touch_With_Us"></p>
	</section>

	<section style="margin-top:80px; margin-bottom:100px;">
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="col-xs-7" >
					<form action="">
						<input type="text" placeholder="Name" class="form-control frmC"><br><br>
						<input type="email" placeholder="Email" class="form-control frmC"><br><br>
						<input type="number" placeholder="Phone" class="form-control frmC"><br><br>
						<textarea name="" id="" cols="30" rows="10" class="form-control frmC" placeholder="Message"></textarea><br>
						<button class="btn btn-success">send message</button>
					</form>
				</div>
				<div class="col-xs-5">
					<div class="puenteado">
						<h3>Headquarter</h3>
						<p style="color: #83a7a5;"><img src="<?php echo base_url('assets/img/img/contactUS/location.png');?>" alt="icon">
						<p id="direccionMid"></p>
						</p>
						<p style="color: #83a7a5;"><img src="<?php echo base_url('assets/img/img/contactUS/cellv.png');?>" alt="icon">
						<p id="telefonoMid"></p>
						</p>
						<p style="color: #0f5f5c;"><img src="<?php echo base_url('assets/img/img/contactUS/msg.png');?>" alt="icon">
						<p id="correoMid"></p>
						</p>
					</div>
				</div>
			</div>
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
<script src="<?= base_url('assets/js/LoadDataContactUs.js');?>"></script>