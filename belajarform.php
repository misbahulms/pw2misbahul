<!DOCTYPE html>
<html>
<head>
	<title>Belajar Form</title>
</head>
<body>
	<?php 
		$kabupaten = [

					 [ 
					   'id'=>1,
					   'nama_kabupaten'=>'pontianak'
					 ],
					 [ 
					 	'id'=>2,
					    'nama_kabupaten'=>'ketapang'
					 ],
					 [
					   'id'=>3,
					   'nama_kabupaten'=>'sintang'
					 ]
					 ];
	 ?>
	<form action="" method="POST">
	<h1>Form Registrasi</h1>
		<table>
			<tr>
				<td>
					Nama
				</td>
				<td>:</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>
					Nim
				</td>
				<td>:</td>
				<td><input type="text" name="Nim"></td>
			</tr>
			<tr>
				<td>
					TTL
				</td>
				<td>:</td>
				<td><input type="text" name="TTL"></td>
			</tr>
			<tr>
				<td>
					Jenis kelamin
				</td>
				<td>:</td>
				<td><input type="radio" name="Jeniskelamin">Laki Laki 
				<input type="radio" name="Jeniskelamin">Perempuan</td>
			</tr>
			<tr>
				<td>
					Alamat
				</td>
				<td>:</td>
				<td><textarea name="Alamat"></textarea></td>
			</tr>
			<tr>
				<td>
					Kabupaten
				</td>
				<td>:</td>
				<td> <select name="kabupaten">
						<?php foreach ($kabupaten as $kab) : ?>
						<option value="<?php echo $kab ['id']?>"><?php echo $kab ['nama_kabupaten']; ?></option>
					    <?php endforeach ?>
				</select></td>
			</tr>
			<tr>
				<td>
					Pilihan Prodi
				</td>
				<td>:</td>
				<td>
				<input type="checkbox" name="Pilihanprodi">SIstem informasi<br>
				<input type="checkbox" name="Pilihanprodi">SIstem komputer<br>
				<input type="checkbox" name="Pilihanprodi">Teknik Informatika<br>
				</td>
			</tr>
			<tr>
				<td><input type="Submit" name="Submit"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>