<?php

function conectar()
{
    $pdo = new PDO('mysql:host=localhost;dbname=phpjquery', 'root', '');
    return $pdo;
}

function listar($tabela)
{
    $pdo = conectar();
    $listar = $pdo->prepare("select * from $tabela");
    $listar->execute();
    return $listar->fetchAll(PDO::FETCH_OBJ);
}

