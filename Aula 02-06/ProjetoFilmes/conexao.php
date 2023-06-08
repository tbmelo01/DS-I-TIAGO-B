<?php
	$servidor="localhost";
	$banco="bdprojetofilmes";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
	
	?>
