<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form input Peminjaman</title>
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
			color: white;
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
			color: white;
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
			color: white;
		}
	</style>
</head>
<body>
	<div id="form_siswa">
		<div id="judul_form">INPUT DATA Peminjaman</div>
			<form method="post" action="tambahpinjam.php">
				<label for="Faktur">No Faktur</label>
				<input id="Faktur" type="text" name="Faktur" placeholder="Masukkan No Faktur">

				<label for="NIS">NIS</label>
				<input id="NIS" type="text" name="NIS" placeholder="Masukkan NIS">

				<label for="Buku" for="">No Buku</label>
				<input id="Buku" type="text" name="Buku" placeholder="Masukkan No Buku">

				<label for="Pinjam" for="">Tanggal Pinjam</label>
				<input id="Pinjam" type="date" name="Pinjam" placeholder="Masukkan Tanggal Pinjam">

				<label for="Kembali" for="">Tanggal Kembali</label>
				<input id="Kembali" type="date" name="Kembali" placeholder="Masukkan Tanggal Kembali">

				<label for="Asli" for="">Tanggal Kembali Asli</label>
				<input id="Asli" type="date" name="Asli" placeholder="Masukkan Tanggal Kembali Asli">

					<input type="submit" name="submit" value="Simpan">
					<input type="reset" name="reset" value="Kosongkan">
					<a id="home" href="../index.php?menu=Peminjaman">Beranda</a>
			</form>
		</div>
	</body>
</html>