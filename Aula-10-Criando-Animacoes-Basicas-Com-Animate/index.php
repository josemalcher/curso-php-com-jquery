<?php require_once '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/v0.100.2/css/materialize.min.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div id="container">
    <h2>Curso de jquery com php</h2>
    <button class="btn" id="mostrar">Mostrar texto</button>
    <button class="btn" id="esconder">Esconder texto</button>

    <form class="" id="form">
        <input type="text" id="txt" name="busca" value="Faça sua busca"/>
        <select id="status_texto" name="status">
            <option value="" selected="selected">Escolha uma opção</option>
            <option value="mostrar">Mostrar texto</option>
            <option value="esconder">Esconder texto</option>
        </select>
        <input type="submit" id="bt_submit"/>
    </form>

    <div id="titulo">
        <div id="subtitulo">
            subtitulo
        </div>
    </div>

    <div id="texto">
        <div id="mostra_texto">
            <?php
            $pessoa = listar('pessoa');
            foreach ($pessoa as $p):
                echo $p->email . "<br />";
            endforeach;
            ?>
        </div>
    </div>

    <div id="texto_digitado">
        <div id="texto_digitado2">
            texto digitado 2
        </div>
    </div>

    <div id="mostrar_texto">
        mostrar
    </div>

</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula10.js"></script>

</body>
</html>