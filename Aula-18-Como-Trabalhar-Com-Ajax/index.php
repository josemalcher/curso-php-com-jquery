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
<div class="container" id="container">
    <form action="submit.php" method="get" id="form_cadastro">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="input-field">
        <label>Email</label>
        <input type="text" name="email" id="email" class="input-field">
        <label>Telefone</label>
        <input type="text" name="telefone" id="telefone" class="input-field">

        <button type="submit" id="bt_cadastrar" class="btn bt">Cadastrar</button>
    </form>
    <div class="card-panel red-text" id="mensagem"></div>
</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula.js"></script>

</body>
</html>