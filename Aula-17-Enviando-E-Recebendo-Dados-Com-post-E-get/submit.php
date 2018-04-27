<?php
require '../config.php';

/*$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];*/
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

//cadastrar_pessoa($nome, $email, $telefone);
if(cadastrar_pessoa($nome, $email, $telefone)){
    echo "Cadastrado com sucesso";
}else{
    echo "ERRO ao cadastrar";
}

