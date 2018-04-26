$(document).ready(function () {

    /* - event.preventDefault
    *    prevenindo comportamento padrão
    *
    *   - serialize
    *   Pega dados do input
    *   obrigatorio botar os 'name'
    */

    var form = $("#form");

    form.on('submit', function (event) {
        event.preventDefault();
        //console.log('Clicou no botão submit do form');
        console.log(form.serialize());
        $(this).find()
    });





});