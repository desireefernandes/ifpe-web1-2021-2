<?php
	$id = $_GET['id'];

	$data = file('dados.csv');
	unset($data[$id]);
	
	$handle = fopen('dados.csv', 'w');
	for($i = 0; $i < sizeof($data); $i++) {
		if ($i != $id) {
			fwrite($handle, $data[$i]);
		}
	}
	fclose($handle);

	header('location: listas.php')
?> 
