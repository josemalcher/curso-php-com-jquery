$(document).ready(function () {

    /* Aula 15 Verificando Se Elemento Esta Selecionado */

    var container = $("#container");
    var tabela = container.find('#tabela');
    var tbody = tabela.find("tbody");

    /*
    * val() - pega os valores dos input
    * event.currentTarguet() - pega o proprio objeto
    * closest() - pega o elemento mais proximo do objeto
    * */

    //console.log($(".email").val()); // pega somente o primeiro
    tbody.on('click', '.btn_id', function (event) {
        event.preventDefault();
        console.log( $(event.currentTarget).closest('tr').find('.nome').val());
        console.log( $(event.currentTarget).closest('tr').find('.email').val());

    });




});