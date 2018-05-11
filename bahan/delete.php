<?php
	include '../koneksi.php'; 
	$id = $_GET['id'];
	$sql = mysql_query("DELETE FROM kegiatan WHERE id_kegiatan='$id'");
	if ($sql) {
		echo "<script>alert('berhasil di delete');window.location='../kegiatan.php'</script>";
	} else {
		echo "<script>alert('gagal di delete');window.location='../kegiatan.php'</script>";
	}
 ?>