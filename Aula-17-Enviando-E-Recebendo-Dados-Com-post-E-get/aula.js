$(document).ready(function () {

    var container = $("#container");
    var form_cadastro = container.find('#form_cadastro');
    var bt_cadastrar = form_cadastro.find('#bt_cadastrar');
    var mensagem = container.find('#mensagem');

    // POST
    // GET

    bt_cadastrar.on('click', function (event) {
        event.preventDefault();
        var nome = form_cadastro.find('#nome').val();
        var email = form_cadastro.find('#email').val();
        var telefone = form_cadastro.find('#telefone').val();

        //console.log(nome.length); // retorna quantidade de caracteres
        if (nome.length === 0) {
            mensagem.html("Nome é Obrigatorio");
        }else if (email.length === 0) {
            mensagem.html("Email é Obrigatorio");
        }else if (telefone.length === 0) {
            mensagem.html("Telefone é Obrigatorio");
        }else{
            /*
            $.post('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            }).done(function () {
                mensagem.html("CADASTRADO COM SUCESSO");
            }).fail(function () {
                mensagem.html("Ocorreu um erro ao cadastrar");
            });*/
            //form_cadastro.submit();
            // POST
            /*$.post('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            });*/
            // GET
            /*$.get('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            });*/
            // passar os dados separados
            $.get('submit.php', {'nome': nome, 'email':email, 'telefone':telefone}, function (data) {
                mensagem.html(data);
            });
        }
    });
});