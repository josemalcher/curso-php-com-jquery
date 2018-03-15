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

## <a name="parte3"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte4"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte5"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte6"></a>


[Voltar ao Índice](#indice)

---

## <a name="parte7"></a>


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