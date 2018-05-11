<?php 
	include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Karang Taruna</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/s.css">

  
</head>

<body>
  <br><br><br><br><br><br>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="index.php">Kembali</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  
</body>
</html>
<?php 
	if (isset($_POST['login'])) {
		$name = $_POST['user'];
		$pass = $_POST['pass'];

		$sql = mysql_query("SELECT * FROM admin WHERE username='$name' AND password='$pass'");
		$row = mysql_num_rows($sql);

		if ($row > 0) {
			session_start();
			$_SESSION['login'] = $name;
			echo "<script>alert('Berhasil Masuk');window.location='index.php'</script>";
		} else {
			echo "<script>alert('gagal Masuk');window.location='index.php'</script>";
		}
	}
 ?>
