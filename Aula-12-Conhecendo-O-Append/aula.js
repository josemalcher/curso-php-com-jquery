$(document).ready(function () {

    /* Aula 12 Conhecendo O Append */

    var container = $("#container");
    var tabela = container.find('#tabela');
    var tbody = tabela.find("tbody");

    var html = '';
    html += '<tr>';
    html += '<td>José Malcher</td>';
    html += '<td>contato@josemalcher.net</td>';
    html += '</tr>';

    tbody.append(html); // anexar - embaixo do elemento
    //tbody.html(html); // apaga tudo  - substitui conteudo já existente

});