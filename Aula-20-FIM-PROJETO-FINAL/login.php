<?php

require 'config/config.php';

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$error = '';

if ($email) :
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
else:
    $error = " E-Mail Invalido";
endif;

if (empty($error)):
    $professor = new libs_classes_Professor();
    $professores = $professor->logar($email, $senha);
else:
    echo $error;
endif;
