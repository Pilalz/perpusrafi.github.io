 <?php
	include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<a class="btnLinkMaster" href="buku/frm_buku.php">Input Buku</a>
		<table border="1" width="100%" align="center">
	<tr>
		<th>Nomor</th>
		<th>No. Buku</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Status</th>
		<th>Control</th>
	</tr>
	<tr>
		<?php
		$no=1;
			$hasil = $konek ->query ("SELECT * FROM buku");
				while ($row = $hasil -> fetch_assoc()){
		?>
		<tr>
				<td align="center"><?php echo $no; $no++;?></td>
				<td><?php echo $row['No_buku']; ?></td>
				<td><?php echo $row['JudulBuku']; ?></td>
				<td><?php echo $row['Pengarang']; ?></td>
				<td><?php echo $row['Penerbit']; ?></td>
				<td><?php echo $row['Tahun_terbit']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><a id="btnEdit" href="buku/frm_editbuku.php?No_buku=<?php echo $row['No_buku'] ?>">Edit</a>
					<a id="btnHapus" href="buku/hapusbuku.php?No_buku=<?php echo $row['No_buku'] ?>">Hapus</a>
			</td>
			</tr>
		<?php
			}
		?>
</table>
</body>
</html>