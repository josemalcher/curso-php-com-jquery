<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap-theme.min.css"/>
    <link type="text/css" rel="stylesheet" href="public/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<div class="container" id="container">
    <div class="row" id="login">
        <form class="form-horizontal" id="form_login">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="senha" placeholder="Password" name="senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" id="btn_login">Login</button>
                    <div class="mensagem" id="mensagem"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<!--<script type="text/javascript" src="public/jquery/jquery-1.14.14.mask.js"></script>-->
<script type="text/javascript" src="public/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="public/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>

<script type="text/javascript" src="public/js/login.js"></script>


</body>
</html>