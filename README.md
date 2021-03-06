# Curso de PHP com Jquery

---

## <a name="indice">Índice</a>

- [Aula 01 Ferramentas Utilizadas No Curso](#parte1)   
- [Aula 02 Evento Click](#parte2)   
- [Aula 03 Evento Click Exemplo](#parte3)   
- [Aula 04 Evento Change](#parte4)   
- [Aula 05 Evento Change Exemplo](#parte5)   
- [Aula 06 Evento Do Teclado Key](#parte6)   
- [Aula 07 Prevenindo Comportamentos Por Default(padrão)](#parte7)   
- [Aula 08 Encontrando Elemento Com O Find](#parte8)   
- [Aula 09 Criando Funções Personalizadas](#parte9)   
- [Aula 10 Criando AnimaÇões Básicas Com Animate](#parte10)   
- [Aula 11 Mostrando E Escondendo Elementos Com Toggles](#parte11)   
- [Aula 12 Conhecendo O Append](#parte12)   
- [Aula 13 Como Trabalhar Com Os Atributos De Uma Tag](#parte13)   
- [Aula 14 Pegando Proprio Elemento Com CurrentTarget](#parte14)   
- [Aula 15 Verificando Se Elemento Esta Selecionado](#parte15)   
- [Aula 16 Pegando Dados De Um Form Com Serializae](#parte16)   
- [Aula 17 Enviando E Recebendo Dados Com $.post E $.get](#parte17)   
- [Aula 18 Como Trabalhar Com Ajax](#parte18)   
- [Aula 19 Como Trabalhar Com JSON](#parte19)   
- [Aula 20 Inicio Do Projeto Do Curso](#parte20)   
- [](#parte21)   
- [](#parte22)   
- [](#parte23)   
- [](#parte24)   
- [](#parte25)   
- [](#parte26)   
- [](#parte27)   
- [](#parte28)   
- [](#parte29)   
- [](#parte30)   



---

## <a name="parte1">Aula 01 Ferramentas Utilizadas No Curso</a>

- https://jquery.com/
- XAMPP

[Voltar ao Índice](#indice)

---

## <a name="parte2">Aula 02 Evento Click</a>

- workspace-php-com-jquery\index.php
```php
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/v0.100.2/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="container">
    <h3>Teste de Jquery</h3>
    <button id="bt1"  class="btn btn-flat">Botão 1</button>
    <button id="bt2" class="btn btn-flat">Botão 2</button>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/testes.js"></script>
<script type="text/javascript" src="materialize/v0.100.2/js/materialize.min.js"></script>

</body>
</html>
```

```js
$(document).ready(function(){
    /* on click */
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
```


[Voltar ao Índice](#indice)

---

## <a name="parte3">Aula 03 Evento Click Exemplo</a>

```js
$(document).ready(function(){
    $('#texto').hide(); // iniciar já oculto sem css
    $('#mostrar').on('click',function(){
        $("#texto").show();
    });
    $('#esconder').on('click',function(){
        $('#texto').hide();
    });
})
```

```html
<?php require_once'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/v0.100.2/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="container">
    <h3>Teste de Jquery</h3>
    <div>
        <button id="mostrar"   class="btn btn-flat">Mostrar</button>
        <button id="esconder" class="btn btn-flat">Esconder</button>
    </div>
    <div id="texto" >
            <?php 
                $dados = listar('pessoa');
                foreach($dados as $dado){
                    echo $dado->email . '<br>';
                }
            ?>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/testes.js"></script>
<script type="text/javascript" src="materialize/v0.100.2/js/materialize.min.js"></script>

</body>
</html>
```


[Voltar ao Índice](#indice)

---

## <a name="parte4">Aula 04 Evento Change</a>

- js/change.js
```javascript
$(document).ready(function () {
    /*
        this
        Change
        val
    */
    $('#cor').on('change', function () {
        var cor = $(this).val();
        //$('body').css('background-color',cor);
        //$('h2').css('background-color',cor);
        $('h2').css({'background-color': cor, 'color': '#FFF'});
    });
    /* Função do thema materialize*/
    $('select').material_select();
});
```
- 
```html
      <div class="col s12">
            <form>
                <select class="selected select-dropdown" id="cor">
                    <option value="" selected="selected">Escolha uma cor</option>
                    <option value="yellow">Amarelo</option>
                    <option value="blue">Azul</option>
                    <option value="black">Preto</option>
                </select>
            </form>
        </div>
    </div>
```


[Voltar ao Índice](#indice)

---

## <a name="parte5">Aula 05 Evento Change Exemplo</a>

- js/change.js
```javascript
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
    })

});
```
- change.php
```html
<div class="col s12">
            <form>
                <select class="selected select-dropdown" id="status_texto">
                    <option value="" selected="selected">Escolha uma opção</option>
                    <option value="mostrar">Mostrar Texto</option>
                    <option value="esconder">Esconder Texto</option>
                </select>
            </form>
        </div>
        <div class="col s12" id="texto">
            <?php
                $pessoa = listar('pessoa');
                foreach ($pessoa as $pes):
                    echo $pes->email . "<br>";
                endforeach;

            ?>
        </div>
```


[Voltar ao Índice](#indice)

---

## <a name="parte6">Aula 06 Evento Do Teclado Key</a>

- js/key.js
```javascript
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

// ----------- Aula 06 Evento Do Teclado Key -----------------------
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
```

- key.php
```html
    <input type="text" id="txt" value="Faça sua busca">
```


[Voltar ao Índice](#indice)

---

## <a name="parte7">Aula 07 Prevenindo Comportamentos Por Default(padrão)</a>

- aula07-compdefault.php
```html
 <input name="busca" type="text" id="txt" value="Faça sua busca">

 <select name="status" class="selected select-dropdown" id="status_texto" >
```

- js/aula07-compdefault.js
```javascript
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
    });
});
```


[Voltar ao Índice](#indice)

---

## <a name="parte8">Aula 08 Encontrando Elemento Com O Find</a>

- aula08-find.php
```html

<div class="row" id="container">
    <div id="titulo">
        <h2>Curso de jquery</h2>
        <div id="subtitulo">
            SubTitulo
        </div>
    </div>
    <div>
        <button id="mostrar" class="btn btn-flat">Mostrar Texto</button>
        <button id="esconder" class="btn btn-flat">Esconder Texto</button>
    </div>
```

- js/aula08-find.js
```javascript
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
```


[Voltar ao Índice](#indice)

---

## <a name="parte9">Aula 09 Criando Funções Personalizadas</a>

-
```javascript
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
```



[Voltar ao Índice](#indice)

---

## <a name="parte10">Aula 10 Criando Animações Básicas Com Animate</a>

- http://api.jquery.com/animate/

- Aula-10-Criando-Animacoes-Basicas-Com-Animate

```js
$(document).ready(function () {

    /* Aula 10 Criando Animações Básicas Com Animate */

    var container = $("#container");
    var titulo = container.find('#titulo');
    var subtitulo = titulo.find('#subtitulo');
    var mostrar_texto = container.find('#mostrar_texto');
    //var texto = container.find('#texto');
    var mostra_texto = container.find('#mostra_texto');
    var bt_submit = container.find('#bt_submit');

    bt_submit.on('click', function (event) {
        event.preventDefault();

        mostra_texto.animate({
            padding: '50'
        }, 5000, function () {
            subtitulo.html('Terminou as animações');
            subtitulo.css('background-color','#ff0');
        });
        mostra_texto.fadeOut(1000);
        mostra_texto.fadeIn(3000);
    });


});
```

```html
<?php require_once '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/v0.100.2/css/materialize.min.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div id="container">
    <h2>Curso de jquery com php</h2>
    <button class="btn" id="mostrar">Mostrar texto</button>
    <button class="btn" id="esconder">Esconder texto</button>

    <form class="" id="form">
        <input type="text" id="txt" name="busca" value="Faça sua busca"/>
        <select id="status_texto" name="status">
            <option value="" selected="selected">Escolha uma opção</option>
            <option value="mostrar">Mostrar texto</option>
            <option value="esconder">Esconder texto</option>
        </select>
        <input type="submit" id="bt_submit"/>
    </form>

    <div id="titulo">
        <div id="subtitulo">
            subtitulo
        </div>
    </div>

    <div id="texto">
        <div id="mostra_texto">
            <?php
            $pessoa = listar('pessoa');
            foreach ($pessoa as $p):
                echo $p->email . "<br />";
            endforeach;
            ?>
        </div>
    </div>

    <div id="texto_digitado">
        <div id="texto_digitado2">
            texto digitado 2
        </div>
    </div>

    <div id="mostrar_texto">
        mostrar
    </div>

</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula.js"></script>

</body>
</html>
```



[Voltar ao Índice](#indice)

---

## <a name="parte11">Aula 11 Mostrando E Escondendo Elementos Com Toggles</a>

- Aula-11-Mostrando-E-Escondendo-Elementos-Com-Toggles

```js
$(document).ready(function () {

    /* Aula 11 Mostrando E Escondendo Elementos Com Toggles */

    var container = $("#container");
    var btn_mostrar_esconder = container.find("#btn_mostrar_esconder");
    var btn_slide_up = container.find("#btn_slide_up");
    var btn_slide_down = container.find("#btn_slide_down");
    var texto = container.find("#texto");

    btn_mostrar_esconder.on('click', function (event) {
        //texto.toggle(200);
        texto.toggle(2000, function () {
            $(this).css({'background-color':'#000','color':'#FFF'});
        });
        //texto.fadeToggle(3000);
        //texto.slideToggle(1000);
    });

    btn_slide_up.on('click',function () {
        texto.slideUp('slow');
    });

    btn_slide_down.on('click', function () {
        texto.slideDown('slow');
    });

    texto.on('click', function () {
        $(this).slideUp('slow');
    })


});
```


[Voltar ao Índice](#indice)

---

## <a name="parte12">Aula 12 Conhecendo O Append</a>
```js
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
```

```html
<?php require_once '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/v0.100.2/css/materialize.min.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div id="container">
    <table id="tabela" class="table-of-contents t">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Luciana</td>
                <td>contato@lucianabarbosa.net</td>
            </tr>
        </tbody>
    </table>
</div>

<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/v0.100.2/js/materialize.min.js"></script>

<script type="text/javascript" src="aula.js"></script>

</body>
</html>
```



[Voltar ao Índice](#indice)

---
## <a name="parte13">Aula 13 Como Trabalhar Com Os Atributos De Uma Tag</a>

```js
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
```
-
```html
<div id="container">
    <table id="tabela" class="table-of-contents t">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $pessoas = listar('pessoa');
            $pessoa = new ArrayIterator($pessoas);
            while($pessoa->valid()):
            ?>
                <tr>
                    <td><?= $pessoa->current()->nome; ?></td>
                    <td><?= $pessoa->current()->email; ?></td>
                    <td><button class="btn btn_id" id="btn_atributos" data-id="<?= $pessoa->current()->id;?>">ID</button></td>
                </tr>
            <?php
                $pessoa->next();
                endwhile;
            ?>
            <!--<tr>
                <td>Luciana</td>
                <td>contato@lucianabarbosa.net</td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="31">Ver id</button></td>
            </tr><tr>
                <td>Anônimo</td>
                <td>contato@anonimo.net</td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="91">Ver id</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button class="btn btn_id" id="btn_atributos" data-id="10">Atributos</button></td>
            </tr>-->
        </tbody>
    </table>
</div>

```


[Voltar ao Índice](#indice)

---
## <a name="parte14">Aula 14 Pegando Proprio Elemento Com CurrentTarget</a>

```js
$(document).ready(function () {

    /* Aula 14 Pegando Proprio Elemento Com CurrentTarget */

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
```
-
```html
<div id="container">
    <table id="tabela" class="table-of-contents t">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $pessoas = listar('pessoa');
        $pessoa = new ArrayIterator($pessoas);
        while ($pessoa->valid()):
            ?>
            <tr>
                <td><input type="text" class="input-field nome" value="<?= $pessoa->current()->nome; ?>" /></td>
                <td><input type="email" class="input-field email" value="<?= $pessoa->current()->email; ?>" /></td>
                <td>
                    <button class="btn btn_id" id="btn_atributos" data-id="<?= $pessoa->current()->id; ?>">ID</button>
                </td>
            </tr>
            <?php
            $pessoa->next();
        endwhile;
        ?>
        </tbody>
    </table>
</div>
```


[Voltar ao Índice](#indice)

---
## <a name="parte15">Aula 15 Verificando Se Elemento Esta Selecionado</a>

```js
$(document).ready(function () {

    /* Aula 15 Verificando Se Elemento Esta Selecionado */
    // target
    // is
    // checked

    var container = $("#container");
    var lista = container.find('#lista');
    var check = container.find('.check');

    lista.on('click', function (event) {
        var alvo = $(event.target);
        if (alvo.is('li')) {
            alvo.css('background-color', '#900');
        } else {
            console.log('não é um li');
        }
    });

    check.on('click', function () {
        /*console.log('você digitou em ' + $(this).val());
        if ($(this).val() == 'maria' && $(this).is(':checked')) {
            alert('marcou maria');
        }*/
        if ($(this).is(':checked')) {
            console.log($(this).val() + ' Está Selecionado');
        }else{
            console.log($(this).val() + '  Não Está Selecionado');
        }
    })
});
```

```html
<div id="container">
    <!-- Lista de nome com select para usar no método is -->
    <ul id="lista" class="collection">
        <li class="collection-item">José Malcher</li>
        <li class="collection-item">Luciana B</li>
        <li class="collection-item">Caio</li>
        <li class="collection-item">Fernando</li>
    </ul>
    <p>
        <input type="checkbox" id="jose" class="check" value="jose">
        <label for="jose"><span>José</span></label>
    </p>
    <p>
        <input type="checkbox" id="luciana" class="check" value="Luciana">
        <label for="luciana"><span>Luciana</span></label>
    </p>
    <p>
        <input type="checkbox" id="maria" class="check" value="maria">
        <label for="maria"><span>Maria</span></label>
    </p>
```


[Voltar ao Índice](#indice)

---
## <a name="parte16">Aula 16 Pegando Dados De Um Form Com Serialize</a>

```js
$(document).ready(function () {

    var container = $("#container");
    var form_cadastro = container.find('#form_cadastro');
    var bt_cadastrar = form_cadastro.find('#bt_cadastrar');
    var mensagem = container.find('#mensagem');

    // length
    // submit
    // serialize

    bt_cadastrar.on('click', function (event) {
        event.preventDefault();
        var nome = form_cadastro.find('#nome').val();
        var email = form_cadastro.find('#email').val();
        var telefone = form_cadastro.find('#telefone').val();

        //console.log(nome.length); // retorna quantidade de caracteres
        if (nome.length === 0) {
            mensagem.html("Nome é Obrigatorio");
        }else if (email.length === 0) {
            mensagem.html("Email é Obrigatorio");
        }else if (telefone.length === 0) {
            mensagem.html("Telefone é Obrigatorio");
        }else{
            mensagem.html(form_cadastro.serialize()); // nome=Jose+malche&email=jose%40jose.net&telefone=12313
            //form_cadastro.submit();
        }
    });
});
```

```html
<div class="container" id="container">
    <form action="submit.php" method="post" id="form_cadastro">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="input-field">
        <label>Email</label>
        <input type="text" name="email" id="email" class="input-field">
        <label>Telefone</label>
        <input type="text" name="telefone" id="telefone" class="input-field">

        <button type="submit" id="bt_cadastrar" class="btn bt">Cadastrar</button>
    </form>
    <div class="card-panel red-text" id="mensagem"></div>
</div>
```

[Voltar ao Índice](#indice)

---
## <a name="parte17">Aula 17 Enviando E Recebendo Dados Com $.post E $.get</a>

```js
$(document).ready(function () {

    var container = $("#container");
    var form_cadastro = container.find('#form_cadastro');
    var bt_cadastrar = form_cadastro.find('#bt_cadastrar');
    var mensagem = container.find('#mensagem');

    // POST
    // GET

    bt_cadastrar.on('click', function (event) {
        event.preventDefault();
        var nome = form_cadastro.find('#nome').val();
        var email = form_cadastro.find('#email').val();
        var telefone = form_cadastro.find('#telefone').val();

        //console.log(nome.length); // retorna quantidade de caracteres
        if (nome.length === 0) {
            mensagem.html("Nome é Obrigatorio");
        }else if (email.length === 0) {
            mensagem.html("Email é Obrigatorio");
        }else if (telefone.length === 0) {
            mensagem.html("Telefone é Obrigatorio");
        }else{
            /*
            $.post('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            }).done(function () {
                mensagem.html("CADASTRADO COM SUCESSO");
            }).fail(function () {
                mensagem.html("Ocorreu um erro ao cadastrar");
            });*/
            //form_cadastro.submit();
            // POST
            /*$.post('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            });*/
            // GET
            /*$.get('submit.php', form_cadastro.serialize(), function (data) {
                mensagem.html(data);
            });*/
            // passar os dados separados
            $.get('submit.php', {'nome': nome, 'email':email, 'telefone':telefone}, function (data) {
                mensagem.html(data);
            });
        }
    });
});
```

```html
<div class="container" id="container">
    <form action="submit.php" method="get" id="form_cadastro">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="input-field">
        <label>Email</label>
        <input type="text" name="email" id="email" class="input-field">
        <label>Telefone</label>
        <input type="text" name="telefone" id="telefone" class="input-field">

        <button type="submit" id="bt_cadastrar" class="btn bt">Cadastrar</button>
    </form>
    <div class="card-panel red-text" id="mensagem"></div>
</div>
```
- config.php
```php
/* Aula 17 Enviando E Recebendo Dados Com $.post E $.get */
function cadastrar_pessoa($nome, $email, $telefone){
    $pdo = conectar();
    $cadastrar = $pdo->prepare("insert into pessoa(nome,email,telefone)value (?,?,?)");
    $cadastrar->bindValue(1, $nome);
    $cadastrar->bindValue(2, $email);
    $cadastrar->bindValue(3, $telefone);
    $cadastrar->execute();

    return ($cadastrar->rowCount() == 1) ? true : false;
}
```
- Aula-17-Enviando-E-Recebendo-Dados-Com-post-E-get/submit.php
```php
<?php
require '../config.php';

/*$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];*/
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

//cadastrar_pessoa($nome, $email, $telefone);
if(cadastrar_pessoa($nome, $email, $telefone)){
    echo "Cadastrado com sucesso";
}else{
    echo "ERRO ao cadastrar";
}


```


[Voltar ao Índice](#indice)

---
## <a name="parte18">Aula 18 Como Trabalhar Com Ajax</a>

```js
$(document).ready(function () {

    var container = $("#container");
    var form_cadastro = container.find('#form_cadastro');
    var bt_cadastrar = form_cadastro.find('#bt_cadastrar');
    var mensagem = container.find('#mensagem');

    // POST
    // GET

    bt_cadastrar.on('click', function (event) {
        event.preventDefault();
        var nome = form_cadastro.find('#nome').val();
        var email = form_cadastro.find('#email').val();
        var telefone = form_cadastro.find('#telefone').val();

        //console.log(nome.length); // retorna quantidade de caracteres
        if (nome.length === 0) {
            mensagem.html("Nome é Obrigatorio");
        } else if (email.length === 0) {
            mensagem.html("Email é Obrigatorio");
        } else if (telefone.length === 0) {
            mensagem.html("Telefone é Obrigatorio");
        } else {
               $.ajax({
                   url: 'submit.php',
                   type: 'post', //get
                   //data: form_cadastro.serialize(),
                   data: 'nome='+nome+'&email='+email,
                   beforeSend: function () {
                       mensagem.html('CADASTRANDO PESSOA, aguarde...')
                   },
                   success:function (data) {
                       mensagem.html(data);
                   }
               })
        }
    });
});
```

```php
<?php
require '../config.php';

sleep(3);
//print_r($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
/*$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];*/

if(cadastrar_pessoa($nome, $email, $telefone)){
    echo "Cadastrado com sucesso";
}else{
    echo "ERRO ao cadastrar";
}


```


[Voltar ao Índice](#indice)

---
## <a name="parte19">Aula 19 Como Trabalhar Com JSON</a>

     JSON (JavaScript Object Notation - Notação de Objetos JavaScript) é uma formatação leve de troca de dados. 
     Para seres humanos, é fácil de ler e escrever. Para máquinas, é fácil de interpretar e gerar. 
     Está baseado em um subconjunto da linguagem de programação JavaScript, Standard ECMA-262 3a Edição -Dezembro - 1999. 
     JSON é em formato texto e completamente independente de linguagem, pois usa convenções que são familiares às 
     linguagens C e familiares, incluindo C++, C#, Java, JavaScript, Perl, Python e muitas outras. Estas propriedades 
     fazem com que JSON seja um formato ideal de troca de dados.
     JSON está constituído em duas estruturas:
     
     1 - Uma coleção de pares nome/valor. Em várias linguagens, isto é caracterizado como um object, record, struct, 
     dicionário, hash table, keyed list, ou arrays associativas.
     
     2 - Uma lista ordenada de valores. Na maioria das linguagens, isto é caracterizado como uma array, vetor, 
     lista ou sequência.
     
     Estas são estruturas de dados universais. Virtualmente todas as linguagens de programação modernas as suportam, 
     de uma forma ou de outra. É aceitavel que um formato de troca de dados que seja independente de linguagem de 
     programação se baseie nestas estruturas.
     
     Em JSON, os dados são apresentados desta forma:
     Um objeto é um conjunto desordenado de pares nome/valor. Um objeto começa com { (chave de abertura) e termina com } 
     (chave de fechamento). Cada nome é seguido por : (dois pontos) e os pares nome/valor são seguidos por , (vírgula).

```js
$(document).ready(function () {
    /** Aula 19 Como Trabalhar Com JSON **/

    var container = $("#container");
    var dados = container.find('#dados');
    var mensagem = container.find('#mensagem');


    //Mais usado!
    $.getJSON('submit.php', function (data) {
        /*$.each(data, function (k, v) {
            console.log(data[k]['nome'] + " email: " + data[k]['email']);
        });*/
        var totalObjetos = data.length;
        for(i = 0 ; i< totalObjetos ; i++){
            console.log(data[i].nome);
        }
    });
    /*

        $.ajax({
            url: 'submit.php',
            dataType: 'json',
            beforeSend: function (data) {
                mensagem.html('Carregando dados JSON.... (5 segundos)');
            },
            success: function (data) {
                $.each(data, function (k, v) {
                    console.log(data[k]['nome'] + " email: " + data[k]['email']);
                });
            }
        })
    */

});
```

```php
<?php
/** Aula 19 Como Trabalhar Com JSON **/
require '../config.php';

sleep(5);
$pessoa = listar('pessoa');
//$pessoa = array(1 => 'José Malcher', 2 => 'Luciana B', 3 => 'jQuery');
echo json_encode($pessoa);

```

[Voltar ao Índice](#indice)

---
## <a name="parte20">Aula 20 Inicio Do Projeto Do Curso</a>



[Voltar ao Índice](#indice)

---
## <a name="parte21"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte22"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte23"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte24"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte25"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte26"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte27"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte28"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte29"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte30"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte31"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte32"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte33"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte34"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte35"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte36"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte37"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte38"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte39"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte40"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte41"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte42"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte43"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte44"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte45"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte46"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte47"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte48"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte49"></a>


[Voltar ao Índice](#indice)

---
## <a name="parte50"></a>


[Voltar ao Índice](#indice)

---
