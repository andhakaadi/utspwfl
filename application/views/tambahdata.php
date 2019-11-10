<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2>TAMBAH DATA MAHASISWA</h2>
		<table>
			<form action="<?=base_url().'index.php/mahasiswa_controler/insert'?>" method="POST">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="text" name="jenis_kelamin"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td>:</td>
					<td><input type="text" name="nomor_hp"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="Tambah"><a href="<?=base_url().'index.php/mahasiswa_controler/index'?>">Batal</a></td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

