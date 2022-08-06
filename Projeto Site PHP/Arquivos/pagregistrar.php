<!DOCTYPE html>
<html lang="html">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
 body{font-family:  Arial, Helvetica, sans-serif;}
div#divtitleREGISTRAR{text-align: center;background:#120a8f;margin: 3px;font-family: Helvetica, Arial, sans-serif;}
div#bluediv{background:blue ;margin: 6px;} div#principaldiv{ width: 50%;background: white;color: black; margin:auto;}
.campo{margin-bottom:10px;margin-bottom: 39px;margin-left: auto;margin-right: auto; max-width: 200px;}
.Cinput{height:20px;} input#buttonREGISTER{border-radius: 50%;background: blue;color: white;width: 95px;font-size: 18px;height: 56px;margin-bottom: 14%; margin-left: 66%;}
@media only screen and (max-width:592px){
div#principaldiv{width:95%;}
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


<div id="divtitleREGISTRAR"><h1>REGISTRAR</h1></div>
<div id="bluediv"> <div id="principaldiv"> 
<div class="campo" id="nomediv"> <span id="nometxt">Nome: </span> <input class="Cinput" id="NOMEinput" type="text"> </div> 
<div class="campo" id="Snomediv"> <span id="Snometxt">Sobrenome: </span> <input class="Cinput" id="SNOMEinput" type="text"> </div> 
<div class="campo" id="NASCdiv"> <span id="NASCtxt">Data de Nascimento: </span> <input class="Cinput" id="NASCinput" type="number"> </div> 
<div class="campo" id="CPFdiv"> <span id="CPFtxt">CPF: </span> <input class="Cinput" id="CPFinput" type="number"> </div>  
<div class="campo" id="TELdiv"> <span id="TELtxt">Telefone: </span> <input class="Cinput" id="TELinput" type="number"> </div> 
<div class="campo" id="EMAILdiv"> <span id="EMAILtxt">Email: </span> <input class="Cinput" id="EMAILinput" type="text"> </div> 
<div class="campo" id="senhadiv"> <span id="SENHAtxt">Senha: </span> <input class="Cinput" id="SENHAinput" type="password"> </div> 
<div class="campo" id="senha2div"> <span id="SENHA2txt">Confirmar Senha: </span> <input class="Cinput" id="SENHA2input" type="password"> </div> 



<input id="buttonREGISTER" type="button" value="Registrar" onclick="confirm()">
</div>
</div>





<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>

<script> 
function confirm() {
var nome = document.getElementById("NOMEinput").value;
var Snome = document.getElementById("SNOMEinput").value;
var nascimento = document.getElementById("NASCinput").value;
var cpf = document.getElementById("CPFinput").value;
var tel = document.getElementById("TELinput").value;
var email = document.getElementById("EMAILinput").value;
var senha1 = document.getElementById("SENHAinput").value;
var senha2 = document.getElementById("SENHA2input").value;
var confirm;
var dados = [nome,Snome,nascimento,cpf,tel,email,senha1,senha2];
for(i=0;i<dados.length;++i){ 
if(dados[i] == ""){
confirm = false;
}} 
if(confirm == false){window.alert("Algum dos Campos está vazio");}else if(senha1!=senha2){
window.alert("As Senhas Não São Iguais");} else {window.alert("Registrado!")}
}

</script>
</body>

</html>

