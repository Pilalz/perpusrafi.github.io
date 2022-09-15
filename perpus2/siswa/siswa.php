<?php
	require_once "config/koneksi.php";
  ?>
<html>
<head>
	<title></title>
</head>
<body>
	<a class="btnLinkMaster" href="siswa/frm_siswa.php">Input Siswa</a>
			<table width="50%" border="1" align="center">

				<tr>
					<th>NO</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>JenisKelamin</th>
					<th>Alamat</th>
					<th>Control</th>
				</tr>
		<?php
			$hasil = $konek->query ("SELECT * from siswa");
			$no = 1;
			while ($x = $hasil -> fetch_array()) {
			  ?>
			<tr>
				<td align="center"><?php echo $no; $no++ ?></td>
				<td><?php echo $x['NIS'] ?></td>
				<td><?php echo $x['Nama'] ?></td>
				<td><?php echo $x['JenisKelamin'] == 'L' ? "Laki-Laki" : "Perempuan" ?></td>
				<td><?php echo $x['Alamat'] ?></td>
				<td><a id="btnEdit" href="siswa/frm_editsiswa.php?NIS=<?php echo $x['NIS'] ?>">Edit</a>
					<a id="btnHapus" href="siswa/hapussiswa.php?NIS=<?php echo $x['NIS'] ?>">Hapus</a>
			</td>
			</tr>
		<?php 
			}
		 ?>
</table>
</body>
</html>