<?php

require 'config/config.php';

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$tipo =  filter_var($_POST['tipo']);
$error = '';

if ($email):
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
else:
    $error = " E-Mail Invalido";
endif;

if (empty($error)):
    $login = new libs_classes_Login;
    $logar = $login->logar($email, $senha, $tipo);
    echo $logar;
else:
    echo $error;
endif;
