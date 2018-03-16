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
- [Aula 09 Criando Fun‡äes Personalizadas](#parte9)   
- [Aula 10 Criando Anima‡äes B sicas Com Animate](#parte10)   
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

## <a name="parte8"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte9"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte10"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte11"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte12"></a>


[Voltar ao Índice](#indice)

---