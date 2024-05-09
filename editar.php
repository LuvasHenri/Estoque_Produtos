<!--Cadastrar de novos produtos -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Item</title>
</head>

<body>
    <h1>Cadastro de novo item</h1>
    <div class="container">
<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
require_once ("./editar-view.php");
?>
        <form action="./cadastrobd.php" method="post">

        <input
        type="hidden"
        name="id"
        id="id"
        value="<?=$resultado['IDEstoque']?>">
        <!--pega o id-->
            <div class="row">
                <div class="col">
                    <label for="nome">Nome do produto</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome do novo produto">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="quantidade">quantidade</label>
                    <input type="number" name="quantidade" id="quantidade" placeholder="Digite a quantidade atual disponivel">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="minimo">quantidade minima</label>
                    <input type="number" name="minimo" id="minimo" placeholder="Digite a quantidade  minima de produtos">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="reset" value="VOLTAR">
                    <input type="submit" value="SALVAR">
                </div>
            </div>

        </form>

    </div>
    </div>
    </div>
</body>

</html>