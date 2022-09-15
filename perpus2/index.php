<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perpus Rafi</title>
	<style type="text/css">

		body{
			margin: 0px;
		}
	#header{
		box-sizing: border-box;
		background-color: #9D5C0D;
		color: white;
		padding: 15px;
		text-align: center;
	}
	#logo > img{
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
		width: 90px;
	}
	#logo > h2{
		font-family: one day;
		height: 100px;
		line-height: 100px;
		margin:0px;
		font-size: 40px;
	}
	#logo{
		height: 100%;
		vertical-align: middle;
	}
	#nav-bar{
	background-color: #E5890A;
	padding: 10px;
	text-align: center;
	}
	.tombol{
		box-sizing: border-box;
		padding: 10px;
		height:100%;
		text-decoration: none;
		color: white;
		padding: 10px;
	}
	.tombol:hover{
		box-sizing: border-box;
		background-color: #ff9400;
		color: black;
		border: 1px ;
	}
	#content{
		width: 100%;
		display: flex;
		background-color: #F7D08A;
	}
	#data-content{
		padding: 5px;
		display: inline-block;
		margin:auto;
		width: 50%;
		background-color: #ffc370;
	}
	#data-content table{
		border: 1px solid black;
		border-collapse: collapse;
		width: 100%;
		
	}
	#data-content th, td{
		border-bottom: 1px solid black;
		padding: 5px;
		border-right: 1px ;
	}
	#data-content tr:hover{
		background-color: #FFAB4C;
	}
	#btnEdit{
		padding: 2px 5px;
		background-color: #87AAAA;
		margin-right: 5px;
		border-radius: 5PX;
		text-decoration: none;
		color: black;
	}
	#btnEdit:hover{
		background-color: #81f0f0;
	}
	#btnHapus{
		padding: 2px 5px;
		background-color: #c99393;
		margin-right: 5px;
		border-radius: 5PX;
		text-decoration: none;
		color: black;
	}
	#btnHapus:Hover{
		background-color: #ff9e9e;
	}
	.btnLinkMaster{
		box-sizing: border-box;
		padding: 5px 10px;
		background-color: #FFBF86;
		color: black;
		margin-top: 5px;
		height: 50px;
		text-align: center;
		line-height: 50px;
		text-decoration: none;
		border-radius: 5px;
		border: solid 1px black;
	}
	.btnLinkMaster:hover{
		background-color: #ffdcbd;
	}
	</style>

</head>
<body bgcolor="#F7D08A">
			
			<div id="header">
				<div id="logo">
					<img width="6%" src="img/buku.png">
					<h2>Perpustakaan</h2>
				</div>
			</div>
			<div id="nav-bar">
				<a class="tombol" href="?menu">Beranda</a>
				<a class="tombol" href="?menu=Siswa">Siswa</a>
				<a class="tombol" href="?menu=Buku">Buku</a>
				<a class="tombol" href="?menu=Peminjaman">Peminjaman</a>
				<a class="tombol" href="?menu">Username</a>
			</div>
			<div id="content">
				<div id="data-content">
					<?php
						if (isset($_GET['menu'])) {
							if ($_GET['menu']=="Siswa"){	
								include_once "siswa/siswa.php";
							}elseif ($_GET['menu']=="Buku") {
								include_once "buku/buku.php";
							}elseif ($_GET['menu']=="Peminjaman") {
								include_once "peminjaman/peminjaman.php";
							}else{
								header("location:index.php");
							}
						}
					  ?>
				</div>
			</div>
			<div id="footer">
				
			</div>

</body>
</html>