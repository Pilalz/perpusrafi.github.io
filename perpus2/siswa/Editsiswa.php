<?php 
	require_once "../config/koneksi.php";
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

//update data 
		$update = "UPDATE Siswa SET Nama='$Nama', JenisKelamin='$jk', Alamat='$Alamat' where NIS='$NIS'";
			$hasil = $konek->query($update);
		if ($hasil){
			echo "Data berhasil diubah! <br><a href='../?menu=Siswa'>Daftar Siswa</a>";
		}else{
			echo "Mengubah data gagal! <br><a href='frm_siswa.php'>Ulang lagi</a><a href ='../'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}


	
 ?>