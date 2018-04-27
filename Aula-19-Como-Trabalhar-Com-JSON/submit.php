<?php
/** Aula 19 Como Trabalhar Com JSON **/
require '../config.php';

sleep(5);
$pessoa = listar('pessoa');
//$pessoa = array(1 => 'José Malcher', 2 => 'Luciana B', 3 => 'jQuery');
echo json_encode($pessoa);






