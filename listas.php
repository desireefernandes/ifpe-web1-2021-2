<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/_css/style.css">
    <link rel="icon" type="imagem/png" href="/_img/gift.png" />
    <title>Gift Guia</title>
</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="banner-list">
        <h1 id="title-banner">Gift Guia<br>
            Visualize suas listas de presentes<br>
            ⇣
        </h1>
    </div>

    <h1 id="title-page">Minhas listas de presentes</h1>

    <div class="container-list">
        <h1>Chá de casa nova</h1>

        <!-- LISTA - leitura arquivo CSV -->
        <?php $itens = file("itens-lista.csv"); ?>

        <ul>
            <?php foreach ($itens as $item): ?>
                <ol><?= $item ?></ol>
            <?php endforeach ?>
        </ul>

        <!-- TABELA - leitura arquivo CSV -->
        <?php
        $itens = file("itens-tabela.csv");
        
            for($i = 0; $i < sizeof($itens); $i++){
                $itens[$i] = explode(",", $itens[$i]);
            }
        ?>

        <table>
            <tr>
				<th>Item</th>
				<th>Valor</th>
				<th>Site</th>
				<th>Quantidade</th>
			</tr> 

            <?php foreach ($itens as $item): ?>
            <tr>
                <?php foreach ($item as $dados): ?>
                    <td> <?= $dados ?> </td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </table>

    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>