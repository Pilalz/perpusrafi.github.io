<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Edit Siswa</title>
	<style type="text/css">
		
		#form_siswa{
			width: 50%;
			background-color: #F7D08A;
			padding: 10px;
			box-sizing: 10px;
			margin: auto;
			border: 1px;
		}
		label{
			margin-top: 10px;
		}
		input[type='text']{
			box-sizing: border-box;
			display: inline-block;
			width: 100%;
			padding: 5px 8px;
			border-radius: 5px;
			border: 1px solid black;	
			margin-bottom: 10px;	
		}
		input[type='submit']{
			box-sizing: border-box;
			border-radius: 10px;
			background-color: #DED9C4;
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
		}
		input[type='submit']:hover{
			background-color: #b0a268;
		}
		textarea{
			box-sizing: border-box;
			display: inline-block;
			padding: 5px 8px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid black;
			resize: vertical;
			margin-bottom: 10px;
		}
		#judul_form{
			background: #E5890A;
			text-align: center;
			margin-bottom: 15px;
			padding: 10px;
			border-radius: 5px 5px 0 0;
			box-sizing: border-box;
			font-family: cooper black;
			font-size: 20px;
			border-bottom: 2px ;
			color: black;
		}
		select{
			box-sizing: border-box;
			display: inline-block;
			width: 100%;
			padding: 5px 8px;
			border-radius: 5px;
			border: 1px solid black;	
			margin-bottom: 10px;
		}
		input[type='reset']{
			box-sizing: border-box;
			border-radius: 10px;
			background-color: #DED9C4;
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
		}
		input[type='reset']:hover{
			background-color: #b0a268;
		}
		#home{
			box-sizing: border-box;
			text-align: center;
			display: inline-block;
			border-radius: 10px;
			background-color: #DED9C4;
			width: 100%;
			padding: 5px;
			text-decoration: none;
			color: black;
			border: solid 1px black;
		}
		#home:hover{
			background-color: #b0a268;
		}
	</style>
	<?php 
		require_once "../config/koneksi.php";

		$NIS = $_GET['NIS'];

		$cari = "SELECT* FROM siswa WHERE NIS='$NIS' ";

		$hasil = $konek->query($cari);

		$row;
		if ($hasil->num_rows>0) {
			$row = $hasil->fetch_assoc();
		}else {
			die("data tidak dapat di temukan! <br> <a href=../index.php?menu=Siswa");
		}
	?>
</head>
<body>
	<div id="form_siswa">
		<div id="judul_form">Form Edit Siswa</div>
			<form method="post" action="Editsiswa.php">
				<label for="in_nis">NIS</label>
				<input id="in_nis" type="text" name="in_nis" readonly placeholder="Masukkan NIS" value="<?php echo $row['NIS'] ?>">

				<label for="in_nama" for="">Nama Siswa</label>
				<input id="in_nama" type="text" name="in_nama" placeholder="Masukkan Nama lengkap" value="<?php echo $row['Nama'] ?>">

				<label for="in_jk" for="">Jenis Kelamin</label>
				<select id="in_jk" name="in_jk">
					<option selected="select" value="">Pilih Jenis kelamin</option>
					<option <?php echo $row['JenisKelamin'] == 'L' ? "selected" : ""; ?> value="L">Laki-laki</option>
					<option <?php echo $row['JenisKelamin'] == 'P' ? "selected" : ""; ?> value="P">Perempuan</option>
				</select>

				<label for="in_alamat">Alamat</label>
				<textarea id="in_alamat" name="in_alamat" placeholder="Masukkan Alamat"><?php echo $row['Alamat'] ?></textarea>

					<input type="submit" name="submit" value="Simpan">
					<input type="reset" name="reset" value="Kosongkan">
					<a id="home" href="../?menu=Siswa">Beranda</a>
			</form>
		</div>
	</body>
</html>