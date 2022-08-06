<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> TrueGaming</title>
<link rel="stylesheet" href="stylegeral.css"> 
<style>
    body{font-family:  Arial, Helvetica, sans-serif;}
div#divtitleLOGIN{text-align: center;background:#120a8f;margin: 3px;font-family: Helvetica, Arial, sans-serif;}
div#bluediv{background:blue ;margin: 6px;} div#logindiv{ width: 50%;background: white;color: black; margin:auto;}
div#emaildiv{margin: auto;max-width: 250px;margin-bottom: 5%;} div#senhadiv{margin: auto;max-width: 265px;margin-bottom: 5%;}
input#emailinputid{height:20px;} input#inputsenhaid{height:20px;}
input#buttonLOGIN{border-radius: 50%;background: blue;color: white;width: 68px;font-size: 18px;height: 44px;margin-bottom: 26%;
margin-left: 66%;}

@media only screen and (max-width:500px){
div#emaildiv{margin-left:10px;} div#senhadiv{margin-left:3px;} input#buttonLOGIN{margin:auto; display:block;}
div#logindiv{width:95%;} #footer{margin-top:70px;} 
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

<div id="divtitleLOGIN"><h1>LOGIN</h1></div>
<div id="bluediv"> <div id="logindiv"> 
<div id="emaildiv"> <span id="emailtxt">Email: </span> <input id="emailinputid" type="text"> </div> 
<div id="senhadiv"> <span id="senhatxt">Senha: </span> <input id="inputsenhaid" type="password"> </div> 

<input id="buttonLOGIN"type="button" value="Login" onclick="vipacess()">
</div>
</div>


<footer id="footer" class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>

<script>
   
    function vipacess(){ 
       
        var email = document.getElementById("emailinputid").value;
        var senha = document.getElementById("inputsenhaid").value;
        if (email=="email_php" && senha=="12345") {
            window.alert("Logado!");
        }else{window.alert("Email Ou Senha Invalidos!");}
        

    }
    
</script>
</body>

</html>

