<?php 

	spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

	use app\View;
	$v = new View();
	$v->render();

	$z = new \src\Mahasiswa();
	$z->test();
 ?>