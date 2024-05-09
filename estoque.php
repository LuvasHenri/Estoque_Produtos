<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th widht="70">#</th>
                    <th>NOME</th>
                    <th>QTD</th>
                    <th>QTD_MIN</th>
                    <th>ED</th>
                    <th>EX</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("./estoquebd.php");
                if ($totalRegistros > 0) {
                    foreach ($dados as $linha) {

                ?>
                        <tr>
                            <td><?= $linha["IDEstoque"]; ?></td>
                            <td><?= $linha["nomeEstoque"]; ?></td>
                            <td><?= $linha["quantidadeEstoque"]; ?></td>
                            <td><?= $linha["quantidademinimaEstoque"]; ?></td>
                            <td><a href="./editar.php?id=<?= $linha['IDEstoque']; ?>">
                                    EDITAR
                                </a></td>
                            <td>excluir</td>
                        </tr>

                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>