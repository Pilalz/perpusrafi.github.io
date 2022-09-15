<?php 

	require_once"../config/koneksi.php";
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

//mencari apakah ada data yg sama
		$cari = "SELECT * FROM buku WHERE No_buku='$No'";
		$hasil = $konek->query($cari);
		if($hasil->num_rows>0){
			$Nama = $hasil->fetch_assoc();
			die('No Buku sudah ada! dengan judul : <b>'.$Buku['Buku'].'</b><br><a href=frm_buku.php>Kembali</a>');
		}

		$simpan = "INSERT INTO buku values ('$No', '$Buku', '$Pengarang', '$Penerbit', '$Tahun', '$Status')";

			$hasil = mysqli_query($konek, $simpan);
		if ($hasil){
			echo "Data berhasil disimpan! <br><a href='frm_buku.php'>Masukkan Data lagi</a> <a href='../index.php?menu=Buku'>Menu Utama</a>";
		}else{
			echo "Menyimpan data gagal! <br><a href='frm_buku.php'>Ulang lagi</a> | <a href ='../index.php?menu=Buku'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}
 ?>