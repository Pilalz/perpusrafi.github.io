<?php 
	require_once "../config/koneksi.php";
//ngambil data
	$Faktur = $_POST['Faktur'];
	$NIS = $_POST['NIS'];
	$Buku = $_POST['Buku'];
	$Pinjam = $_POST['Pinjam'];
	$Kembali = $_POST['Kembali'];
	$Asli = $_POST['Asli'];

//menampung data
$data = array(
		['l' => "Faktur", 'd' =>$Faktur],
		['l' => "NIS", 'd'=>$NIS],
		['l' => "Buku", 'd'=>$Buku],
		['l' => "Pinjam", 'd'=>$Pinjam],
		['l' => "Kembali", 'd'=>$Kembali],
		['l' => "Asli", 'd'=>$Asli],
		);

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
		$update = "UPDATE Siswa SET NIS='$NIS', No_buku='$Buku', Tanggal_pinjam='$Pinjam', Tanggal_kembali='$Kembali', Tanggal_kembali_asli='$Asli' where Faktur='$Faktur'";
			$hasil = $konek->query($update);
		if ($hasil){
			echo "Data berhasil diubah! <br><a href='../?menu=Siswa'>Daftar Siswa</a>";
		}else{
			echo "Mengubah data gagal! <br><a href='frm_siswa.php'>Ulang lagi</a><a href ='../'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}


	
 ?>