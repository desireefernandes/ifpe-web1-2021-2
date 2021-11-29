<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/_css/style.css">
	<link rel="icon" type="imagem/png" href="/_img/gift.png" />
	<title>Gift Guia</title>
</head>

<!-- Construa um HTML que tenha ao menos uma lista com 4 elementos e uma tabela com 4 linhas e pelo menos 3 colunas. -->

<body>
	<!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="banner-list">
        <h1 id="title-banner">Gift Guia<br>
			Visualise suas listas de presentes<br>
			⇣
        </h1>
    </div>
    
    <h1 id="title-page">Minhas listas de presentes</h1>
    
	<div class="container-list">
		<h1>Chá de casa nova</h1>
        <!-- Arrays -->
        <?php
        $itens = [
                "Abajur" => ["R$ 500,00", "exemplo.com.br/item", 1],
                "Sofá" => ["R$ 500,00", "exemplo.com.br", 1],
                "Lixeira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Geladeira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Tv" => ["R$ 500,00", "exemplo.com.br", 1],
                "Pipoqueira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Batedeira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Escorredor" => ["R$ 500,00", "exemplo.com.br", 1],
                "Livro de receitas" => ["R$ 500,00", "exemplo.com.br", 1],
                "Mesa de Centro" => ["R$ 500,00", "exemplo.com.br", 1],
                "Copos" => ["R$ 500,00", "exemplo.com.br", 1],
                "Cafeteira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Luminária" => ["R$ 500,00", "exemplo.com.br", 1],
                "Prateleira" => ["R$ 500,00", "exemplo.com.br", 1],
                "Aspirador de pó" => ["R$ 500,00", "exemplo.com.br", 1]
                 ];
        ?>

        <!-- Tabela - leitura dos arrays -->
		<table>
			<tr>
				<th>Item</th>
				<th>Valor</th>
				<th>Site</th>
				<th>Quantidade</th>
			</tr> 
            <?php foreach ($itens as $item => $elementos): ?>
            <tr>
                <td><?= $item ?></td>
                <?php foreach ($elementos as $detalhes): ?>
                    <td><?= $detalhes ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </table>

	</div>

	<!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>