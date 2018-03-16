<?php require_once 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/v0.100.2/css/materialize.min.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container">
    <div class="row" id="container">
        <h2>Curso de jquery</h2>
        <div>
            <button id="mostrar" class="btn btn-flat">Mostrar Texto</button>
            <button id="esconder" class="btn btn-flat">Esconder Texto</button>
        </div>
        <div class="col s12">
            <form>

                <input type="text" id="txt" value="Faça sua busca">

                <select class="selected select-dropdown" id="status_texto">
                    <option value="" selected="selected">Escolha uma opção</option>
                    <option value="mostrar">Mostrar Texto</option>
                    <option value="esconder">Esconder Texto</option>
                </select>
            </form>
        </div>
        <div class="col s12" id="texto_digitado"></div>
        <div class="col s12" id="texto">
            <?php
                $pessoa = listar('pessoa');
                foreach ($pessoa as $pes):
                    echo $pes->email . "<br>";
                endforeach;
            ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/v0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="js/key.js"></script>

</body>
</html>