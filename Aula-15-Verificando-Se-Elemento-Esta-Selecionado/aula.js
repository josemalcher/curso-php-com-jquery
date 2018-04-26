$(document).ready(function () {

    /* Aula 15 Verificando Se Elemento Esta Selecionado */
    // target
    // is
    // checked

    var container = $("#container");
    var lista = container.find('#lista');
    var check = container.find('.check');

    lista.on('click', function (event) {
        var alvo = $(event.target);
        if (alvo.is('li')) {
            alvo.css('background-color', '#900');
        } else {
            console.log('não é um li');
        }
    });

    check.on('click', function () {
        /*console.log('você digitou em ' + $(this).val());
        if ($(this).val() == 'maria' && $(this).is(':checked')) {
            alert('marcou maria');
        }*/
        if ($(this).is(':checked')) {
            console.log($(this).val() + ' Está Selecionado');
        }else{
            console.log($(this).val() + '  Não Está Selecionado');
        }
    })


});