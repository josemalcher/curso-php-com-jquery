$(document).ready(function () {

    var container = $('#container');
    var login = container.find('#login');
    var form_login = login.find('#form_login');
    var btn_login = form_login.find('#btn_login');
    var mensagem = form_login.find('#mensagem');

    btn_login.on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: 'login.php',
            type: 'post',
            data: form_login.serialize(),
            beforeSend:
                function () {
                    mensagem.html('<img src="public/images/ajax-loader.gif">');
                },
            success: function (data) {
                console.log(data);
                if(data === "1"){
                    mensagem.html('Logado com sucesso');
                }else{
                    mensagem.html('ERRO AO LOGAR!');
                }
            }
        });
    });

});