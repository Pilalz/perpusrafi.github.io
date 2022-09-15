<?php
 	$host ="localhost";
 	$username ="root";
 	$pwd ="";
 	$db ="perpus_rafi";

 	$konek = new mysqli($host,$username,$pwd,$db);

 	if ($konek ->connect_error) {
 		die("koneksi gagal");
 	}
 	$hasil=mysqli_select_db($konek,$db);

?>