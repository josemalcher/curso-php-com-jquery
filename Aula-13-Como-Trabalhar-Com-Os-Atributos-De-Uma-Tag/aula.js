$(document).ready(function () {

    /* Aula 13 Como Trabalhar Com Os Atributos De Uma Tag */

    var container = $("#container");
    var tabela = container.find('#tabela');
    var tbody = tabela.find("tbody");
    var btn_atributos = tbody.find("#btn_atributos");
    var btn_id = tbody.find(".btn_id");

    btn_id.on('click',function () {
        var id = $(this).attr('data-id');
        console.log(id);
    })

});