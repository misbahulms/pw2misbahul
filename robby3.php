<?php 

 $prodi = [ 
 			[ 
 			"id"=>0,
 			"nama"=>"kimia",
 			"kuota"=>5,
 			"kaprodi"=>"andi"
 			],
 			[ 
 			"id"=>1,
 			"nama"=>"fisika",
 			"kuota"=> 14,
 			"kaprodi"=>"dosen"
 			],
 			[ 
 			"id"=>2,
 			"nama"=>"biologi",
 			"kuota"=> 12,
 			"kaprodi"=>"rizalinda"
 			],
 			[ 
 			"id"=>3,
 			"nama"=>"sisfo",
 			"kuota"=> 32,
 			"kaprodi"=>"ilham"
 			],
 			[ 
 			"id"=>4,
 			"nama"=>"kelautan",
 			"kuota"=> 11,
 			"kaprodi"=>"naora"
 			],
 			[ 
 			"id"=>5,
 			"nama"=>"statistika",
 			"kuota"=> 15,
 			"kaprodi"=>"naomi"
 			],
 			[ 
 			"id"=>6,
 			"nama"=>"matematika",
 			"kuota"=> 12,
 			"kaprodi"=>"mariantul"
			]
 		];
	echo $prodi[6]['nama'] ;

	echo "<pre>";
	echo "$prodi:"; var_dump($prodi);
	echo "</pre";
		
		

	
 ?>