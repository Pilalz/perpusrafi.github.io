<?php 
	require_once "../config/koneksi.php";
//ngambil data
	$No = $_POST['No'];
	$Buku = $_POST['Buku'];
	$Pengarang = $_POST['Pengarang'];
	$Penerbit = $_POST['Penerbit'];
	$Tahun = $_POST['Tahun'];
	$Status = $_POST['Status'];

//menampung data
$data = array(
		['l' => "No", 'd' =>$No],
		['l' => "Buku", 'd'=>$Buku],
		['l' => "Pengarang", 'd'=>$Pengarang],
		['l' => "Penerbit", 'd'=>$Penerbit],
		['l' => "Tahun", 'd'=>$Tahun],
		['l' => "Status", 'd'=>$Status]);

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
		$update = "UPDATE buku SET JudulBuku='$Buku', Pengarang='$Pengarang', Penerbit='$Penerbit', Tahun_terbit='$Tahun', Status='$Status'  where No_buku='$No'";
			$hasil = $konek->query($update);
		if ($hasil){
			echo "Data berhasil diubah! <br><a href='../?menu=Buku'>Daftar Buku</a>";
		}else{
			echo "Mengubah data gagal! <br><a href='frm_buku.php'>Ulang lagi</a><a href ='../index.php?menu=Buku'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}


	
 ?>