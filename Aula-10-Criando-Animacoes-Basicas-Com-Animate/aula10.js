$(document).ready(function () {

    /* Aula 10 Criando Animações Básicas Com Animate */

    var container = $("#container");
    var titulo = container.find('#titulo');
    var subtitulo = titulo.find('#subtitulo');
    var mostrar_texto = container.find('#mostrar_texto');
    //var texto = container.find('#texto');
    var mostra_texto = container.find('#mostra_texto');
    var bt_submit = container.find('#bt_submit');

    bt_submit.on('click', function (event) {
        event.preventDefault();

        mostra_texto.animate({
            padding: '50'
        }, 5000, function () {
            subtitulo.html('Terminou as animações');
            subtitulo.css('background-color','#ff0');
        });
        mostra_texto.fadeOut(1000);
        mostra_texto.fadeIn(3000);
    });


});