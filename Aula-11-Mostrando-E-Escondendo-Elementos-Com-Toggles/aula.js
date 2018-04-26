$(document).ready(function () {

    /* Aula 11 Mostrando E Escondendo Elementos Com Toggles */

    var container = $("#container");
    var btn_mostrar_esconder = container.find("#btn_mostrar_esconder");
    var btn_slide_up = container.find("#btn_slide_up");
    var btn_slide_down = container.find("#btn_slide_down");
    var texto = container.find("#texto");

    btn_mostrar_esconder.on('click', function (event) {
        //texto.toggle(200);
        texto.toggle(2000, function () {
            $(this).css({'background-color':'#000','color':'#FFF'});
        });
        //texto.fadeToggle(3000);
        //texto.slideToggle(1000);
    });

    btn_slide_up.on('click',function () {
        texto.slideUp('slow');
    });

    btn_slide_down.on('click', function () {
        texto.slideDown('slow');
    });

    texto.on('click', function () {
        $(this).slideUp('slow');
    })


});