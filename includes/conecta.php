<?php
$servidor = "sql212.infinityfree.com";
$usuario = "if0_41975847";
$senha = "Mari280404";
$banco = "if0_41975847_microblog";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($conexao, "utf8");