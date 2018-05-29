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
        var mensagem = form_login.find('#mensagem');
        var carregando = form_login.find('#carregando');

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
                        mensagem.html('Logado com sucesso!');
                        var urlRedirect = "<?=base_url()?>" + data;
                        carregando.remove();
                        setTimeout("window.location.href = '" + urlRedirect + "'", 2000);

                    } else {
                        if (data === 'email') {
                            mensagem.html('E-Mail Incorreto');
                            var urlRedirect = "<?=base_url()?>" + "alunoController/index";
                            setTimeout("window.location.href = '" + urlRedirect + "'", 1000);
                        } else {
                            mensagem.html('ERRO ao logar!');
                            var urlRedirect = "<?=base_url()?>" + "alunoController/index";
                            setTimeout("window.location.href = '" + urlRedirect + "'", 1000);
                        }
                    }

                }
            });


        });

    });

</script>