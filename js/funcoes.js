$(document).ready(function () {
// Aula 09 Criando funções Personalizadas

    var container = $("#container");
    var text = container.find('#texto');
    //var mostrar_txt = container.find('#mostrar_txt');
    var container_form = container.find('#container_form');
    var btn_sub = container_form.find('#submit');
/*

    /!* funcoes *!/
    text.hide();
    function mostra_emails() {
        text.show();
        text.css({'color':'#988', 'font-weight': 'bold'});
    }

    btn_sub.on('click',function (event) {
        event.preventDefault();
        mostra_emails();
    });
*/

   /* funcções anônimas*/
    var mostra_emails = function () {
        text.show();
        text.css({'color':'#988', 'font-weight': 'bold'});
    };
    btn_sub.on('click',function (event) {
        event.preventDefault();
        mostra_emails();
    });


});