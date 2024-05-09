<?php
$id  = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);;
$quantidade = filter_input(INPUT_POST, "quantidade", FILTER_SANITIZE_NUMBER_INT);
$minimo = filter_input(INPUT_POST, "minimo", FILTER_SANITIZE_NUMBER_INT);


try {
    $comandoSQL = $conexao->prepare("
    UPDATE estoque SET
        nomeEstoque = :nome,
        quantidadeEstoque = :quantidade,
        quantidademinimaEstoque = :minimo
        WHERE IDEstoque = :id
   
    
    ");

    $comandoSQL->execute(array(

        ":nome" => $nome,
        ":quantidade" => $quantidade,
        ":minimo" => $minimo,
        ":id" => $id


    ));

    if ($comandoSQL->rowCount() > 0) {
        echo ("Atualizado");
    } else {
        echo ("Erro na atualização");
    }
} catch (PDOException $erro) {
    //throw $th;
}
