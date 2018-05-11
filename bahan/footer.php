<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Karang Taruna Cinta Bakti Kel. Pajajaran Bandung<br> 2017
								<?php 
									if (isset($_SESSION['login'])) {
										echo "<a href='bahan/logout.php'>Logout</a></p>";
									} else {
										echo "<a href='login.php'>Login</a></p>";
									}
								 ?>
							<p class="fh5co-social-icons">
								<a href="https://m.facebook.com/Kartapajajaran?fref=nf&_ft_=top_level_post_id.930434560370448%3Atl_objid.930434560370448%3Athid.144177498996162%3A306061129499414%3A44%3A0%3A1464764399%3A-8512758593470005972&__tn__=C" target="_blank"><i class="icon-facebook-with-circle"></i></a>
								<a href="https://www.instagram.com/karta_pajajaran" target="_blank"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>