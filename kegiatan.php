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
	<title>Karang Taruna</title>
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
		<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
			<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 float-overlay">
							<h2>Kegiatan Kami</h2>
							<h3>Beberapa kegiatan yang kami selenggarakan.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-product-section">
			<div class="container">
				<div class="row">
					<?php 
						$sql = mysql_query("SELECT * FROM kegiatan");
						while ($data = mysql_fetch_array($sql)) { ?>
							<div class="product-inner">
								<div class="col-md-4 animate-box">
									<div class="desc">
										<h3><?php echo $data['judul']; ?></h3>
										<p><?php echo $data['isi']; ?></p>
										<h6 style="margin-top: -15px;"><?php echo "Diposting pada ".$data['tanggal']; ?></h6>
										<?php 
											if (isset($_SESSION['login'])) {
												echo "<a href='edit.php?id=".$data['id_kegiatan']."'>
													<button style='padding:5px; margin-top:-10px; width:90px; background-color:white; border:1px solid grey;'>Edit</button>
												</a>";
												echo "<a href='bahan/delete.php?id=".$data['id_kegiatan']."'>
													<button style='padding:5px; margin-top:-10px; margin-left:15px; width:90px; background-color:white; border:1px solid grey;'>Delete</button>
												</a>";
											}
										 ?>
									</div>
								</div>
								<div class="col-md-8 animate-box">
									<figure>
										<a href="#"><img class="img-responsive" src="images/<?php echo $data['foto']; ?>" alt="product"></a>
									</figure>
								</div>
							</div>
					<?php } ?>
				</div>
			</div>
		</div>
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

