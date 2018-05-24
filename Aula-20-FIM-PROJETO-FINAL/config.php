<?php

/* === DESABILITADO Para projeto prático ===== */

/*function conectar()
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
}*/

/* Aula 17 Enviando E Recebendo Dados Com $.post E $.get */
/*function cadastrar_pessoa($nome, $email, $telefone){
    $pdo = conectar();
    $cadastrar = $pdo->prepare("insert into pessoa(nome,email,telefone)value (?,?,?)");
    $cadastrar->bindValue(1, $nome);
    $cadastrar->bindValue(2, $email);
    $cadastrar->bindValue(3, $telefone);
    $cadastrar->execute();

    return ($cadastrar->rowCount() == 1) ? true : false;
}*/

