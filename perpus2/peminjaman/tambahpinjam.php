<?php 

	require_once"../config/koneksi.php";
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

//mencari apakah ada data yg sama
		$cari = "SELECT * FROM peminjaman WHERE No_Faktur='$Faktur'";
		$hasil = $konek -> query($cari);
		if($hasil->num_rows>0){

			$Nama = $hasil->fetch_assoc();
			die('Faktur siswa sudah ada! dengan nama: <b>'.$Buku['Buku'].'</b><br><a href=frm_pinjam.php>Kembali</a>');
		}

		$simpan = "INSERT INTO peminjaman VALUES ('$Faktur', '$NIS', '$Buku', '$Pinjam', '$Kembali', '$Asli')";
			$hasil = $konek->query($simpan);
		if ($hasil){
			echo "Data berhasil disimpan! <br><a href='frm_pinjam.php'>Masukkan Data lagi</a> <a href='../index.php?menu=Peminjaman'>Menu Utama</a>";
		}else{
			echo "Menyimpan data gagal! <br><a href='frm_pinjam.php'>Ulang lagi</a><a href ='../index.php?menu=Peminjaman'>Menu Utama</a>";

			echo "Errornya".$konek->error;
		}
 ?>