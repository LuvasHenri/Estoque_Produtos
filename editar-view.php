<?php

require_once ("./conexao/conexao.php");

try {
    $sql = "SELECT * FROM estoque WHERE IDESTOQUE=:id";
    $comandoSQL = $conexao->prepare($sql);
    $comandoSQL->execute(array(":id" => $id));
    $resultados = $comandoSQL->fetch();
} catch (\Throwable $th) {
    echo ("Erro no id");
}