<!DOCTYPE html>
<html lang="en">

<head>

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/backend/css/footer.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/backend/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/backend/js/jquery.min.js') ?>"></script>

</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=$logo_escola?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Início <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Mensagens</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Disciplinas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Disciplina 1</a></li>
                        <li><a href="#">Disciplina 2</a></li>
                        <li><a href="#">Disciplina 3</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Relatório Geral</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$nome_aluno?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Configurações</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sair do Sistema</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


