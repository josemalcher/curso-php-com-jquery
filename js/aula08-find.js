$(document).ready(function () {

var container = $("#container");
var titulo = container.find("#titulo");
var subtitulo = titulo.find("#subtitulo");
var mostrar_txt = container.find("#mostrar_txt");

var container_form = container.find('#container_form');
var bt_sumit = container_form.find('#submit');

subtitulo.html('encontrou o subtitulo');
mostrar_txt.html(subtitulo.html());

var texto = container.find('#texto');
//console.log(texto.text());
texto.css({'color':'#988', 'font-weight': 'bold'});


bt_sumit.on('click',function(event) {
    event.preventDefault();
    texto.css({'color':'#F09', 'font-weight': 'bold'});
});

});