<?php 

	require_once"../config/koneksi.php";
//ngambil data
	$NIS = $_POST['in_nis'];
	$Nama = $_POST['in_nama'];
	$jk = $_POST['in_jk'];
	$Alamat = $_POST['in_alamat'];

//menampung data
$data = array(
		['l' => "NIS", 'd' =>$NIS],
		['l' => "Nama", 'd'=>$Nama],
		['l' => "Jenis Kelamin", 'd'=>$jk],
		['l' => "Alamat", 'd'=>$Alamat]);

//cari data kosong
$kosong = array();
for ($i = 0;$i < count($data); $i++){ 
	if ($data[$i]['d']=="") {
		$kosong[] = $data[$i]['l'];
	}
}

//kumpulan data kosong
		$errorgabungan="";
		if (!empty($kosong)) {
			for ($i=0; $i < count($kosong); $i++) { 
				$errorgabungan .= $kosong[$i]." ";
			}
			die("Ada yang kosong kolom : ".$errorgabungan."<br><a href='javascript:history.go(-1);'>Kembali</a>");
		}

//mencari apakah ada data yg sama
		$cari = "SELECT * FROM Siswa WHERE NIS='$NIS'";
		$hasil = $konek -> query($cari);
		if($hasil->num_rows>0){

			$Nama = $hasil->fetch_assoc();
			die('NIS siswa sudah ada! dengan nama: <b>'.$Nama['Nama'].'</b><br><a href=frm_siswa.php>Kembali</a>');
		}

		$simpan = "INSERT INTO Siswa VALUES ('$NIS', '$Nama', '$jk', '$Alamat')";
			$hasil = $konek->query($simpan);
		if ($hasil){
			echo "Data berhasil disimpan! <br><a href='frm_siswa.php'>Masukkan Data lagi</a> <a href='../index.php?menu=Siswa'>Menu Utama</a>";
		}else{
			echo "Menyimpan data gagal! <br><a href='frm_siswa.php'>Ulang lagi</a><a href ='../index.php?menu=Siswa'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}
 ?>