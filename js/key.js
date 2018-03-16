$(document).ready(function () {
    /* Função do thema materialize*/
    $('select').material_select();
    $('#texto').hide();
    $('#status_texto').on('change',function () {
        var status = $(this).val();
        console.log(typeof(status));
        console.log(typeof('mostrar'));
        var divs = $('div');
        console.log(divs.length); //quantidade de divs

        if(status === 'mostrar'){
            $('#texto').show();
        }else{
            $('#texto').hide();
        }
    });

    /* html */
    $('#txt').on('keyup',function () {
        var texto = $(this).val();
        $('#texto_digitado').html(texto);
    });

    /* focus e focusout
    $("#txt").on('focus', function () {
        $(this).val('O foco está aqui');
    });
    $("#txt").on('focusout',function () {
        $(this).val('');
    });
    */

    $("#txt").on('focus', function () {
        //colocando o valor do campo = vazio
        $(this).val('');
    });
    $("#txt").on('focusout', function () {
        //pegando o valor do campo do texto
        var texto = $(this).val();
        if(texto.length === 0){
            $(this).val('Faça sua busca');
        }else{
            if(texto !== 'Faça sua busca' ){
                $(this).val(texto);
            }else{
                $(this).val('Faça sua busca');
            }
        }
    });

    
});