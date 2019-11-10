<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2>PERBARUI DATA MAHASISWA</h2>
		<table>
			<form action="<?=base_url().'index.php/mahasiswa_controler/update'?>" method="POST">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="hidden" name="nim" value="<?=$r['nim']?>"><?=$r['nim']?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$r['nama']?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="text" name="jenis_kelamin" value="<?=$r['jenis_kelamin']?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?=$r['alamat']?>"></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td>:</td>
					<td><input type="text" name="nomor_hp" value="<?=$r['nomor_hp']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="Perbarui"></td>
				</tr>
			</form>
		</table>
		<a href="<?=base_url().'index.php/mahasiswa_controler/index'?>">Batal</a>
	</center>
</body>
</html>

