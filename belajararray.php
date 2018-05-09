<!DOCTYPE html>
<html>
<head>
	<title>Belajar array</title>
</head>
<body>
	<h1>Belajar array</h1>
	<?php 
		$dosen= ['ilhamsyah','dianprawira','syahru','istikoma','nurul','renny'];
		$prodi = [
				 [ "id"=>0,
				   "Nama"=>"sistem informasi",
				   "kajur"=>"Sistem Informasi"
				 ],
				 [ "id"=>1,
				   "Nama"=>"sistem informasi",
				   "kajur"=>"Sistem Informasi" 
				 ],
				 [ "id"=>2,
				   "Nama"=>"sistem siskom",
				   "kajur"=>"Siskom" 
				 ]
				 ]

	 ?>

	 <h2><?php echo $dosen[0]; 
	 		   echo "<br>";
	 		   echo $prodi[2]['Nama'];



	 	 ?>
		 </h2>

</body>
</html>