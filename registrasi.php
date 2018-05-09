<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Peserta</title>
</head>
<body>
	<?php 
		$kabupaten = [
					 [
						'id'=>1,
						'nama_kab'=>"Kota Pontianak"
					 ],
					 [
						'id'=>2,
						'nama_kab'=>"Sekadau"
					 ],
					 [
						'id'=>3,
						'nama_kab'=>"Kota Pontianak"
					 ]
					 ];
		 ?>
		
<h1>Registrasi</h1>
	<form method="POST" action="proses.php">
	<form>
	<table>
			<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
			<input type="text" name="nama">
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
			<input type="text" name="username">
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td>
			<input type="password" name="password">
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>

			<textarea name="alamat" row="10" cols="20"></textarea>
		</tr>
		<tr>
			<td>kabupaten</td>
			<td>:</td>
			<td>
				<select name="kabupaten">
					<?php foreach ($kabupaten as $kab): ?>
					<option value="<?php echo $kab ['id'] ?>"><?php echo $kab ['nama_kab'];?></option>
					<?php endforeach ?>
					
			</select>
			<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>
			<input type="number" name="no_hp">
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
			<input type="radio" name="Jenis Kelamin" value="1">Pria
			<input type="radio" name="Jenis Kelamin" value="0">Wanita

		</tr>
		<tr>
			<td>Pilihan Prodi</td>
			<td>:</td>
			<td>
			<input type="checkbox" name="Pilihan Prodi">Sistem Informasi<br>
			<input type="checkbox" name="Pilihan Prodi">Sistem Komputer<br>
			<input type="checkbox" name="Pilihan Prodi">Ilmu Kelautan<br>
		</tr>
		<tr>
			<td>
			<input type="submit" name="submit" value="simpan">
			<input type="submit" name="submit" value="batal">
			</td>
		</tr>
		
	</form>
</body>
</html>