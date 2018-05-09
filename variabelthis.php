<?php 
	class bunga {
		public $jenis_bunga;
		public $warna;

		public function mekar (){
			return "Bunga $this->jenis_bunga Mekar berwarna $this->warna";
		}
	
		public function kuncup (){
			return "Bunga $this->jenis_bunga Mulai kuncup dan warna $this->warna mulai kusam";
		}

		public function tambahbunga(){
			$hasil=$this->jenis_bunga + $this->warna;
			return "Hasilnya adalah $hasil";
		}
	}
 // proses instansiasi
	$melati =new bunga();
	$mawar = new bunga();
 // set property
	$melati->jenis_bunga='Melati';
	$melati->warna='Putih';
	$mawar->jenis_bunga='Mawar';
	$mawar->warna='merah';

	echo "Property set jenis bunga dari objek melati dengan nilai parameternya adalah $melati->jenis_bunga"; echo "<br>";
	echo $melati->mekar(); echo "<br>";
	echo $melati->kuncup(); echo "<br>";
	echo $melati->tambahbunga(); echo "<br>";

	echo $mawar->mekar(); echo "<br>";
	echo $mawar->kuncup(); echo "<br>";
	echo $mawar->tambahbunga(); echo "<br>";

 ?>