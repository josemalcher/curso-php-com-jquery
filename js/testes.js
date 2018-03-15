$(document).ready(function(){
    /*   
    $('#bt1').on('click', function(){
        $('body').css('background-color','#900');
    });
    $('#bt2').on('click', function () {
        $('body').css('background-color', '#00f');
    });
    $('h3').on('click', function(){
        $('body').css('background-color', '#000');
        console.log('Clicou em h3!!')
    }); */

    $('#texto').hide(); // iniciar já oculto sem css
    $('#mostrar').on('click',function(){
        $("#texto").show();
    });
    $('#esconder').on('click',function(){
        $('#texto').hide();
    });


})