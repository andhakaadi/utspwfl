<!DOCTYPE html>
<html>
<head>
	<title>Riwayat</title>
</head>
<body>
	<center>
		<h2>TABLE RIWAYAT PEMBARUAN NOMOR TELEPON</h2>
		<table border="1">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nomor Hp Lama</th>
				<th>Nomor Hp Baru</th>
				<th>Tanggal Diubah</th>
			</tr>
			<?php
			$no=1;
			foreach($data as $r) {
				?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td><?php echo $r['nim'] ?></td>
					<td><?php echo $r['no_hp_lama'] ?></td>
					<td><?php echo $r['no_hp_baru'] ?></td>
					<td><?php echo $r['tgl_diubah'] ?></td>
				</tr>
				<?php
				$no++;
			}
			?>
		</table>
		<br>
		<a href="<?=base_url().'index.php/mahasiswa_controler/index'?>">Kembali</a>
	</center>
</body>
</html>

