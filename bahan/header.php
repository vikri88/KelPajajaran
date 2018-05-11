<?php 
	session_start();
 ?>
<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html">Pajajaran</a>
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								<li><a href="index.php">Beranda</a></li>
								<li><a href="profil.php">Profil</a></li>
								<li><a href="Kegiatan.php">Kegiatan</a></li>
								<?php 
									if (isset($_SESSION['login'])) {
										echo "<li><a href='tambah.php'>Add Kegiatan</a></li>";	
									}
								 ?>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>