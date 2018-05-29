<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $titulo_login ?></h3>
                </div>
                <div class="panel-body" id="container">
                    <fieldset>
                        <form id="form_login" action="">
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" id="email" type="email"
                                       autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="senha" id="senha"
                                       type="password"
                                       value="">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="0" style="display: none">[Selecione]</option>
                                    <option value="aluno">Aluno</option>
                                    <option value="professor">Professor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-success" id="btn_login">Entrar
                                    <spam id="carregando"></spam>
                                </button>

                            </div>
                            <div class="form-group"><!-- Mensagem de Erro-->
                                <div class="center center-align" id="mensagem"></div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var container = $('#container');
        var form_login = $('#form_login');
        var email = form_login.find('#email');
        var senha = form_login.find('#senha');
        var btn_login = form_login.find('#btn_login');
        var carregando = form_login.find('#carregando');
        var mensagem = form_login.find('#mensagem');
        var mensagem_erro = function (mensagem, tipo) {
            var error = '';
            error += '<div class="alert alert-' + tipo + '">';
            error += '<button type="button" class="close" data-dismiss="alert">&times</button>';
            error += '<h4>Aviso!</h4>';
            error += mensagem;
            error += '</div>';
            return error;
        };

        btn_login.on('click', function (event) {
            event.preventDefault();

            $.ajax({
                url: '<?=base_url()?>' + 'loginController/login',
                type: 'post',
                data: form_login.serialize(),
                beforeSend: function () {
                    carregando.html(' <img src="<?=base_url()?>assets/img/ajax-loader.gif" alt="Carregando...">');
                },
                success: function (data) {
                    if (data.length > 0 && data !== 'email') {

                        var mensagem_sucesso = '';
                        mensagem_sucesso += '<div class="alert alert-success">';
                        mensagem_sucesso += '<h4>Bem Vindo!</h4>';
                        mensagem_sucesso += 'Você será redirecionado para página!<br>Aguarde... ';
                        mensagem_sucesso += '<img src="<?=base_url()?>assets/img/ajax-loader.gif" alt="Carregando...">';
                        mensagem_sucesso += '</div>';
                        mensagem.html(mensagem_sucesso);
                        //mensagem.html(mensagem_erro('Logado Com Sucesso! <br> Você será redirecionado ao Painel', 'success'));
                        var urlRedirect = "<?=base_url()?>" + data;
                        carregando.remove();
                        setTimeout("window.location.href = '" + urlRedirect + "'", 5000);

                    } else {
                        if (data === 'email') {
                            mensagem.html(mensagem_erro('E-mail Inválido', 'danger'));
                            var urlRedirect = "<?=base_url()?>" + "loginController/index";
                            setTimeout("window.location.href = '" + urlRedirect + "'", 1500);
                        } else {
                            mensagem.html(mensagem_erro('Erro ao Logar', 'danger'));
                            var urlRedirect = "<?=base_url()?>" + "loginController/index";
                            setTimeout("window.location.href = '" + urlRedirect + "'", 1500);
                        }
                    }

                }
            });


        });

    });

</script>