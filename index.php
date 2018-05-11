<?php 
	include 'koneksi.php';
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Karta Pajajaran</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="box-wrap">
		<?php 
			include 'bahan/header.php';
		 ?>
		<!-- END: header -->
		<div class="owl-carousel owl-carousel1 owl-carousel-fullwidth fh5co-light-arrow animate-box" data-animate-effect="fadeIn">
			<div class="item"><a href="" class="image-popup"><img src="images/anggota.jpg" alt="image"></a></div>
			<div class="item"><a href="" class="image-popup"><img src="images/anggota.jpg" alt="image"></a></div>
		</div>
		<div id="fh5co-media-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h3>Karang Taruna Pajajaran</h3>
						<p>Siap menjadi generasi muda yang berguna bagi Nusa dan Bangsa</p>
					</div>
				</div>
				<div class="row">
					<a href="profil.php">
						<div class="col-md-7 animate-box">
							<div class="fh5co-cover" style="background-image: url(images/enam.jpg);">
								<div class="desc">
									<p>Could if together</p>
									<span></span>
								</div>
							</div>
						</div>
					</a>
					<div class="col-md-5">
						<div class="fh5co-cover">
							<div class="fh5co-cover-hero animate-box">
								<div class="fh5co-cover-thumb" style="background-size: 100%; background-image: url(images/karta.jpg);"></div>
								<div class="desc-thumb">
									<a target="_blank" href="https://karangtarunaku.blogspot.co.id/2016/04/logo-karang-taruna-kota-bandung.html">
										<p>Karang Taruna Bandung</p>
									</a>
									<span>Karang TarunaKu</span>
								</div>
							</div>

							<div class="fh5co-cover-hero animate-box">
								<div class="fh5co-cover-thumb" style="background-size: 100%; background-image: url(images/sip.png);"></div>
								<div class="desc-thumb">
									<a href="http://bandungjuara.com/" target="_blank">
										<p>Menuju Bandung Juara</p>	
									</a>
									<span>Bandung Juara</span>
								</div>
							</div>

							<div class="fh5co-cover-hero animate-box">
								<div class="fh5co-cover-thumb" style="background-size: 100%; background-image: url(images/dis.jpg);"></div>
								<div class="desc-thumb">
									<a href="https://portal.bandung.go.id/" target="_blank">
										<p>Diskominfo Kota Bandung</p>
										<span>Diskominfo</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-media-section -->
		<div id="fh5co-intro-section">
			<div class="fh5co-intro-cover text-center animate-box" data-animate-effect="fadeIn" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
				<a href="#" class="btn">Kompak, Kerja Sama, dan Toleransi</a>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-product-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Kegiatan</h3>
						<p>Beberapa Bentuk kegiatan yang kami laksanakan, dan dibuat oleh muda mudi pajajaran</p>
					</div>
				</div>
				<div class="owl-carousel owl-carousel2">
					<?php 
						$sql = "SELECT * FROM kegiatan";
						$query = mysql_query($sql);
						while ($data = mysql_fetch_array($query)) { ?>
							<div class="item animate-box">
								<a href="kegiatan.php">
									<img src="images/<?php echo $data['foto']; ?>" alt="image">
								</a>
							</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- END fh5co-product-section -->
		<?php 
			include 'bahan/footer.php';
		 ?>
	</div>
	<!-- END: box-wrap -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Parallax Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

