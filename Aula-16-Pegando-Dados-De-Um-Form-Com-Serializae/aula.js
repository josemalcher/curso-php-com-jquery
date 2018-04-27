$(document).ready(function () {

    var container = $("#container");
    var form_cadastro = container.find('#form_cadastro');
    var bt_cadastrar = form_cadastro.find('#bt_cadastrar');
    var mensagem = container.find('#mensagem');

    // length
    // submit
    // serialize

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
            mensagem.html(form_cadastro.serialize()); // nome=Jose+malche&email=jose%40jose.net&telefone=12313
            //form_cadastro.submit();
        }



    });



});