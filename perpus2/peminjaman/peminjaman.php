 <?php
	include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<a class="btnLinkMaster" href="peminjaman/frm_pinjam.php">Input Peminjaman</a>
		<table border="1" width="100%" align="center">
	<tr>
		<th>Nomor</th>
		<th>No Faktur</th>
		<th>NIS</th>
		<th>No Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Tanggal Kembali Asli</th>
		<th>Control</th>
	</tr>
	<tr>
		<?php
		$no=1;
			$hasil = $konek ->query ("SELECT * FROM peminjaman");
				while ($row = $hasil -> fetch_assoc()){
		?>
		<tr>
				<td align="center"><?php echo $no; $no++;?></td>
				<td><?php echo $row['No_faktur']; ?></td>
				<td><?php echo $row['NIS']; ?></td>
				<td><?php echo $row['No_buku']; ?></td>
				<td><?php echo $row['Tanggal_pinjam']; ?></td>
				<td><?php echo $row['Tanggal_kembali']; ?></td>
				<td><?php echo $row['Tanggal_kembali_asli']; ?></td>
				<td><a id="btnEdit" href="peminjaman/frm_editpinjam.php?No_faktur=<?php echo $row['No_faktur'] ?>">Edit</a>
					<a id="btnHapus" href="peminjaman/hapuspinjam.php?No_faktur=<?php echo $row['No_faktur'] ?>">Hapus</a>
			</td>
			</tr>
		<?php
			}
		?>
</table>
</body>
</html>