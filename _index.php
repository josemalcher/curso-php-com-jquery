<?php require_once'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/v0.100.2/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="container">
    <h3>Teste de Jquery</h3>
    <div>
        <button id="mostrar"   class="btn btn-flat">Mostrar</button>
        <button id="esconder" class="btn btn-flat">Esconder</button>
    </div>
    <div id="texto" >
            <?php 
                $dados = listar('pessoa');
                foreach($dados as $dado){
                    echo $dado->email . '<br>';
                }
            ?>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/testes.js"></script>
<script type="text/javascript" src="materialize/v0.100.2/js/materialize.min.js"></script>

</body>
</html>