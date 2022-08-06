<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css">

<style>
    body{font-family:Arial, Helvetica, sans-serif;}
div#titleSUP{background:white; color:black; text-align:center; height:80px;} h1#h1title{font-size:64px;}
div#bluediv{background:blue;} div#formSUP{background:white;color:black; width:70%; margin:auto; font-size:25px;}
p#txt1{color: blue;  font-size: 39px; margin-left: 5px; margin-top: 3px;} div#divtxt2{background:gray; color:white; font-size:25px;} 
p#txt2{font-size:30px;} input#Einput{height: 22px;width: 241px; margin-left: 20px;} p#txt5{font-size:25px; margin-left: 5px;}  input#buttunSUP{border-radius: 50%;height: 42px; background: blue;width: 72px; color:white; font-size:18px; margin-left: 12px;margin-top: 19px;margin-bottom: 89px;}
textarea#relatorioSUP{margin-left: 10%; width: 70%; height: 200px;}

@media only screen and (max-width:498px){
div#formSUP{width:100%;}
}


</style>

</head>
<body>
<div id="superior"> 
     <img id="logo"src="imgs/logomark.png" alt="logo"> <a href="paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <form action="PLATAFORMAS/SEARCH/search.php" method="GET">  <input type="image"  src="imgs/lupa.png"  class="lupa" alt="submit"><input name="searchgame" type="text" class="pesquisabar" id="search"><a href="index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="index.php"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="PLATAFORMAS/LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="PLATAFORMAS/PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a></form>
    </div>  
</div>

<div id="titleSUP"><h1 id="h1title">SUPORTE</h1> </div>

<div id="bluediv">
<div id="formSUP"> 
<p id="txt1">Esta tendo algum Problema ou Duvida em relação a loja ou a um produto específico?</p>
<div id="divtxt2"><p id="txt2"> Entre em contato com nossos canais via Email,
por audio chamada, ou mensagem via WhatsApp</p> <p id="txt3"> Email: shoptrgame@gmail.com </p> <p id="txt4">   Tel: (11) 96314-2543 </p> 
</div>
<p id="txt5"> Ou se preferir insira seu Email: <input id="Einput" type="text"> e descreva sua questão no campo abaixo </p> 
<textarea id="relatorioSUP"> </textarea>

<input id="buttunSUP" type="button" onclick="Enviar()" value="Enviar"> 
</div>

</div>







<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>

<script> 
function Enviar() {
var email = document.getElementById("Einput").value;
if(email==""){window.alert("Email Invalido")}else{window.alert("Mensagem enviada com Sucesso!")}
}
</script>
</body>

</html>