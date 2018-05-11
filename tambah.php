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
	<title>Karang Taruna pajajaran</title>
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
			<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 float-overlay">
							<h2>Add Kegiatan</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="col-md-8 animate-box" style="width: 100%;">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="firstname">Tanggal</label>
								<?php 
									$date = date("d - M - Y");
								 ?>
								<input type="text" name="tgl" id="firstname" value="<?php echo $date; ?>" class="form-control" disabled>
							</div>
							<div class="col-md-6 field">
								<label for="lastname">Upload Gambar</label>
								<input type="file" name="file" id="lastname">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 field">
								<label for="email">Judul</label>
								<input type="text" name="judul" id="email" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 field">
								<label for="message">Isi</label>
								<textarea name="isi" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 field">
								<input type="submit" name="post" id="submit" class="btn btn-primary" value="Posting">
								<input type="submit" name="kembali" id="submit" class="btn btn-primary" value="Kembali" style="background-color: lightblue; margin-left: 20px;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- END map -->
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
<?php 
	if (isset($_POST['post'])) {
		$tgl = $_POST['tgl'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];

		$ekstensi_diperbolehkan	= array('png','jpg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'images/'.$nama);
					$query="INSERT INTO kegiatan VALUES('','1',NOW(),'$judul','$isi','$nama')";
					$hasil = mysql_query($query);
					if ($hasil) {
						echo "<script>alert('Berhasil');window.location='kegiatan.php'</script>";
					} else {
						echo "<script>alert('gagal');window.location='tambah.php'</script>";
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo "<script>alert('gagal ekstensi');window.location='tambah.php'</script>";
			}
	} else if (isset($_POST['kembali'])) {
		header('location: index.php');
	}
 ?>

