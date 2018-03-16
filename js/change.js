$(document).ready(function () {
    /* Função do thema materialize*/
    $('select').material_select();
    /*
        this
        Change
        val
    */
    /*
    $('#cor').on('change', function () {
        var cor = $(this).val();
        //$('body').css('background-color',cor);
        //$('h2').css('background-color',cor);
        $('h2').css({'background-color': cor, 'color': '#FFF'});
    });
    */

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
    })

});