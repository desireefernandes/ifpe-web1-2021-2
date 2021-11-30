<?php
	$item = $_POST['item'];
	$valor = $_POST['valor'];
	$site = $_POST['site'];
    $quantidade = $_POST['quantidade'];

	$fp = fopen('dados.csv', 'a');
	fwrite($fp,"$item, $valor, $site, $quantidade". PHP_EOL);
	fclose($fp);

    header("location: listas.php");
?>
