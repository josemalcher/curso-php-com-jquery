$(document).ready(function () {
    /** Aula 19 Como Trabalhar Com JSON **/

    var container = $("#container");
    var dados = container.find('#dados');
    var mensagem = container.find('#mensagem');


    //Mais usado!
    $.getJSON('submit.php', function (data) {
        /*$.each(data, function (k, v) {
            console.log(data[k]['nome'] + " email: " + data[k]['email']);
        });*/
        var totalObjetos = data.length;
        for(i = 0 ; i< totalObjetos ; i++){
            console.log(data[i].nome);
        }
    });
    /*

        $.ajax({
            url: 'submit.php',
            dataType: 'json',
            beforeSend: function (data) {
                mensagem.html('Carregando dados JSON.... (5 segundos)');
            },
            success: function (data) {
                $.each(data, function (k, v) {
                    console.log(data[k]['nome'] + " email: " + data[k]['email']);
                });
            }
        })
    */

});