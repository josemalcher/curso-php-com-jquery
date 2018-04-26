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
    <table id="tabela" class="table-of-contents t">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $pessoas = listar('pessoa');
            $pessoa = new ArrayIterator($pessoas);
            while($pessoa->valid()):
            ?>
                <tr>
                    <td><?= $pessoa->current()->nome; ?></td>
                    <td><?= $pessoa->current()->email; ?></td>
                    <td><button class="btn btn_id" id="btn_atributos" data-id="<?= $pessoa->current()->id;?>">ID</button></td>
                </tr>
            <?php
                $pessoa->next();
                endwhile;
            ?>
            <!--<tr>
                <td>Luciana</td>
                <td>contato@lucianabarbosa.net</td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="31">Ver id</button></td>
            </tr><tr>
                <td>Anônimo</td>
                <td>contato@anonimo.net</td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="91">Ver id</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="10">Atributos</button></td>
            </tr>-->
        </tbody>
    </table>
</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula.js"></script>

</body>
</html>