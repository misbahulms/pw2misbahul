<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
<?php
	$kabupaten=[
					[
						"id"=>1,
						"nama_kab"=>"Pontianak"
					],
					[
						"id"=>2,
						"nama_kab"=>"Mempawah"
					],
					[
						"id"=>3,
						"nama_kab"=>"Sintang"
					]
				];

?>

	<h2>FORM REGISTRASI</h2>
		<table>
			<form method="POST" action="proses.php">
			<tr>
			<td>username</td>
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
			<td>Nama</td>
			<td>:</td>
			<td>
			<input type="text" name="nama">
		</tr>
		<tr>
			<td>No Hp</td>
			<td>:</td>
			<td>
			<input type="number" name="no_hp">
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>

			<textarea name="Alamat" row="5" cols="30"></textarea>
		</tr>
		<tr>
			<td>kabupaten</td>
			<td>:</td>
			<td>
				<select name="kabupaten">
					<?php foreach ($kabupaten as $kab):?>
						<option value="<?php echo $kab['id'] ?>"><?php echo
							$kab['nama_kab'];?> </option>
					<?php endforeach ?>
				</option>
			</select>

		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>:</td>
			<td>
				<input type="radio"	name="jenis kelamin">Pria
				<input type="radio"	name="jenis kelamin">Wanita

		</tr>
		<tr>
			<td>Prodi pilihan</td>
			<td>:</td>
			<td>
				<input type="checkbox"	name="Prodi pilihan">sistem informasi<br>
				<input type="checkbox"	name="Prodi pilihan">sistem komputer<br>
				<input type="checkbox"	name="Prodi pilihan">informatika
		</tr>

		<td>
			<input type="submit"	name="submit"	value="simpan">
		</td>

</form>
</table>
</body>
</html>
			
