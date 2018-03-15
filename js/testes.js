$(document).ready(function(){
    /* on clik */
    $('#bt1').on('click', function(){
        $('body').css('background-color','#900');
    });
    $('#bt2').on('click', function () {
        $('body').css('background-color', '#00f');
    });
    $('h3').on('click', function(){
        $('body').css('background-color', '#000');
        console.log('Clicou em h3!!')
    });
})