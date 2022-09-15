<?php
	require_once "../config/koneksi.php"; 

	$NIS = $_GET['NIS'];

	if (!isset($_GET['conf'])) {
		die("
			Yakin Anda Akan Menghapus Data Ini?<br>
			<a href ='?NIS=$NIS&conf=y'>Yes</a> |
			<a href ='../?menu=Siswa'>No</a>
			");
	}else{
		$cari = "DELETE FROM siswa WHERE NIS='$NIS'";

		$hasil = $konek->query($cari);

		if ($hasil) {
			header('location:../index.php?menu=Siswa');
		}else{
			die("Gagal Menghapus! : ".$konek->error);
		}
	}

 ?>