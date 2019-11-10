<!DOCTYPE html>
<html>
<head>
	<title>UTS-161240000497</title>
</head>
<body>
	<center>
		<h2>CRUD SEDERHANA "DATA MAHASISWA"</h2>
		<h4>UTS PEMROGRAMAN WEB FRAMEWORK LANJUT</h4>
		<p>Andhaka Adi Pangestu-161240000497</p>
		<p></p>
		<table border="2" width="30%">
			<tr align="center">
				<td width="50%"><a href="<?=base_url().'index.php/mahasiswa_controler/insert'?>">Tambah Data</a></td>
				<td width="50%"><a href="<?=base_url().'index.php/mahasiswa_controler/riwayat'?>">Riwayat</a></td>
			</tr>
		</table>
		<p></p>		
		<table border="1" width="80%">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Nomor HP</th>
				<th>Aksi</th>
			</tr>
			<?php
			$no=1;
			foreach($data as $r) {
				?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td align="center"><?php echo $r['nim'] ?></td>
					<td align="center"><?php echo $r['nama'] ?></td>
					<td align="center"><?php echo $r['jenis_kelamin'] ?></td>
					<td align="center"><?php echo $r['alamat'] ?></td>
					<td align="center"><?php echo $r['nomor_hp'] ?></td>
					<td align="center"><a href="<?=base_url().'index.php/mahasiswa_controler/update/'.$r['nim']?>">Ubah</a> || <a href="<?=base_url().'index.php/mahasiswa_controler/delete/'.$r['nim']?>">Hapus</a></td>
				</tr>
				<?php
				$no++; 
			}
			?>
		</table>
	</center>
</body>
</html>

