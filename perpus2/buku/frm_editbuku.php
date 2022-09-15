<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Edit Buku</title>
	<style type="text/css">
		
		#form_buku{
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
		input[type='text'],[type='date']{
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

		$No_buku = $_GET['No_buku'];

		$cari = "SELECT* FROM buku WHERE No_buku='$No_buku' ";

		$hasil = $konek->query($cari);

		$row;
		if ($hasil->num_rows>0) {
			$row = $hasil->fetch_assoc();
		}else {
			die("data tidak dapat di temukan! <br> <a href=../index.php?menu=Buku");
		}
	?>
</head>
<body>
	<div id="form_buku">
		<div id="judul_form">INPUT DATA BUKU</div>
			<form method="post" action="Editbuku.php">
				<label for="No">No.Buku</label>
				<input id="No" type="text" name="No" placeholder="Masukkan Nomor Buku" value="<?php echo $row['No_buku']; ?>">

				<label for="Buku" for="">Judul Buku</label>
				<input id="Buku" type="text" name="Buku" placeholder="Masukkan Nama Buku" value="<?php echo $row['JudulBuku']; ?>">

				<label for="Pengarang" for="">Pengarang Buku</label>
				<input id="Pengarang" type="text" name="Pengarang" placeholder="Masukkan Nama Buku" value="<?php echo $row['Pengarang']; ?>">

				<label for="Penerbit" for="">Penerbit Buku</label>
				<input id="Penerbit" type="text" name="Penerbit" placeholder="Masukkan Nama Buku" value="<?php echo $row['Penerbit']; ?>">

				<label for="Tahun" for="Tahun">Tahun Terbit</label>
				<input type="date" name="Tahun" id="Tahun" placeholder="Masukkan Tahun Terbit" value="<?php echo $row['Tahun_terbit']; ?>">

				<label for="Status" for="">Status</label>
				<select id="Status" name="Status">
					<option value=""></option>
					<option <?php echo $row['Status'] == 'dipinjam' ? "selected" : ""; ?> value="dipinjam">Dipinjam</option>
					<option <?php echo $row['Status'] == 'Tersedia' ? "selected" : ""; ?> value="Tersedia">Tersedia</option>
				</select>

					<input type="submit" name="submit" value="Simpan">
					<input type="reset" name="reset" value="Kosongkan">
					<a id="home" href="../?menu=Buku">Beranda</a>
			</form>
		</div>
	</body>
</html>