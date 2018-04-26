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
    <!-- Lista de nome com select para usar no método is -->
    <ul id="lista" class="collection">
        <li class="collection-item">José Malcher</li>
        <li class="collection-item">Luciana B</li>
        <li class="collection-item">Caio</li>
        <li class="collection-item">Fernando</li>
    </ul>

    <p>
        <input type="checkbox" id="jose" class="check" value="jose">
        <label for="jose"><span>José</span></label>
    </p>
    <p>
        <input type="checkbox" id="luciana" class="check" value="Luciana">
        <label for="luciana"><span>Luciana</span></label>
    </p>
    <p>
        <input type="checkbox" id="maria" class="check" value="maria">
        <label for="maria"><span>Maria</span></label>
    </p>


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
        while ($pessoa->valid()):
            ?>
            <tr>
                <td><input type="text" class="input-field nome" value="<?= $pessoa->current()->nome; ?>"/></td>
                <td><input type="email" class="input-field email" value="<?= $pessoa->current()->email; ?>"/></td>
                <td>
                    <button class="btn btn_id" id="btn_atributos" data-id="<?= $pessoa->current()->id; ?>">ID</button>
                </td>
            </tr>
            <?php
            $pessoa->next();
        endwhile;
        ?>
        </tbody>
    </table>
</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula.js"></script>

</body>
</html>