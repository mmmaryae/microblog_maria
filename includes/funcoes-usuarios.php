<?php
require "conecta.php";

// Função para inserir novos usuários
function inserirUsuario($conexao, $nome, $email, $senha, $tipo)
{
    // Montando o comando SQL para fazer o INSERT dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha)
            VALUES('$nome', '$email', '$tipo', '$senha')";

    // Executando o comando no banco via PHP
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


function listarUsuarios($conexao)
{
    $sql = "SELECT nome, email, tipo, id FROM usuarios";

    /* Executando o comando no banco via PHP 
    obtendo o resultado ("bruto") da consulta/comando. */
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    /* Extraindo do resultado "bruto" os dados da consulta
    em formato de ARRAY ASSOCIATIVO. */
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

// mysqli_fetch_all (todos)
//mysqli_fetch_assoc (um) 
//SELECT    para carregar dados de uma PESSOA através do ID
function listarUmUsuario($conexao, $id)
{
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    //Execução e verificação do comando SQL 
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    //Extração dos dados de UMA PESSOA como Array Associativo
    return mysqli_fetch_assoc($resultado);
}


function atualizarUsuarios($conexao, $id, $nome, $email, $senha, $tipo)
{
    $sql = "UPDATE usuarios SET
            nome = '$nome',
            email = '$email',
            senha = '$senha',
            tipo = '$tipo'
                WHERE id = $id"; //Não esquecer

    //copie e cole aqui o mysqli_query da função atualizarUsuarios


    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
