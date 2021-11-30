<?php
	$item = $_POST['item'];
	$valor = $_POST['valor'];
	$site = $_POST['site'];
    $quantidade = $_POST['quantidade'];

	$fp = fopen('dados.csv', 'a');
	fwrite($fp,"$item, $valor, $site, $quantidade". PHP_EOL);
	fclose($fp);
?>

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

    <!-- banner -->
    <div class="banner-list">
        <h1 id="title-banner">Gift Guia<br>
            Visualize suas listas de presentes<br>
            ⇣
        </h1>
    </div>

    <h1 id="title-page">Minhas listas de presentes</h1>

    <div class="container-list">
        <h1>Chá de casa nova</h1>

        <!--Nav lista-->
        <div class="grid">
            <a class="abrir-button" href="#abrirModal">Adicionar item</a>
            <a class="editar-button">Editar item</a>
            <a class="deletar-button">Deletar item</a>
        </div>
        
        <!-- FORMULÁRIO MODAL 
        Referência base modal http://lucasmaiaesilva.com.br/posts/criando-modal-simples-com-html-e-css/ -->
        <div id="abrirModal" class="modal">

            <!--Conteúdo próprio-->
            <!--Conteiner Formulário-->
            <div class="container-list">
                <!--Botão fechar-->
                <a href="#fechar" title="Fechar" class="fechar">x</a>
                <!--Formulário-->
                <div class="form">
                    <h3>Adicionar item</h3>
                    <form action="listas.php" method="POST">
                        <input type="text" name="item" placeholder="Item">
                        <input type="number" name="valor" placeholder="Valor">
                        <input type="text" name="site" placeholder="Site">
                        <input type="number" name="quantidade" placeholder="Quantidade">
                        <input type="submit" value="Criar">
                    </form>
                </div>
            </div>
            <!--end Formulário-->
            <!--end Conteúdo próprio-->
        </div>
        <!--end modal-->

        <!-- TABELA -->
        <?php
            $itens = file("dados.csv");
            for($i = 0; $i < sizeof($itens); $i++) {
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
        <!-- END TABELA -->

    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>