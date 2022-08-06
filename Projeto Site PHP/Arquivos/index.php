<?php include("conexao.php"); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> TrueGaming </title>
<link rel="stylesheet" href="styleindex.css"> 
<link rel="stylesheet" href="stylegeral.css"> 
</head>
<body>
<div id="superior"> 
     <img id="logo"src="imgs/logomark.png" alt="logo"> <a href="paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <form action="PLATAFORMAS/SEARCH/search.php" method="GET">  <input type="image"  src="imgs/lupa.png"  class="lupa" alt="submit"><input name="searchgame" type="text" class="pesquisabar" id="search">  <a href="index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="#plataformas"><span id="cabecalho"> Plataformas &#9660; <span> </a>
     <a href="PLATAFORMAS/LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="PLATAFORMAS/PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a> </form>
    </div>  
</div>
<div id="divcod"><span class="txtleftcod"> Conquiste Todas as Frentes. <br>Lute em batalhas aéreas sobre o Pacífico, salte de paraquedas na França, <br>defenda o Stalingrado com um fuzil de precisão <br> e 
    prossiga em meio a forças avançando no norte da África.<br>
    A franquia Call of Duty® franchise returna com Call of Duty®: Vanguard,<br> onde jogadores serão imersos no combate visceral da 2ª Guerra <br>em uma escala global sem precedente.<br>
Ao longo de uma Campanha solo profundamente envolvente,<br> um seleto grupo de soldados de diferentes países <br>encaram a ameaça mais grave do mundo.<br> Os jogadores também deixarão 
sua marca pela famosa experiência.<br> </span>
<a href="detalhes/2.php"><img id="artcod" src="imgs/cod.png" alt="Cod Vanguard"></a> </div>
<div class="plataformscod"><img id="iconps4cod"src="imgs/ps4icon.png" alt="ps4 icon">
<img src="imgs/ps5icon.png" alt="ps5 icon">
<img src="imgs/xboxicon.png" alt="xbox icon">
<img class="steamicon" src="imgs/steamicon.png" alt="windows icon"></div>
<h1 id="h1cod"> A ZONA DA GUERRA TE ESPERA!</h1> 
<div class="fimcod"> </div>
<div class="divghost"><a href="detalhes/51.php"><img class="imgghost" src="imgs/ghostps4.jpg" alt="ghosttsushima"></a>
<<span class="preconewimgghost"> 230R$!!! </span>
<a href="detalhes/51.php"><div class="divprecoghost"> <span class="compreagorghost">Compre <br> Agora!</span></div></a>
</div>
<div class="barracatalogo"><div class="divh1catalogo"><h1 class="h1catalogo" id="plataformas"> Cátalogo De Plataformas </h1></div></div>
<a href="paglancamentos.php"><img  class="imgcatalogogames" src="imgs/catalogogames.jpg" alt="games"></a>
<div class="catalogoplataformasps4"><a href="PLATAFORMAS/PS4/catalogops4.php"><img class="iconps4small"src="imgs/ps4icon.png"></a></div>
<div class="catalogoplataformasswitch"><a href="PLATAFORMAS/SWITCH/catalogoswitch.php"><img class="iconswitchsmall"src="imgs/switchicon.png"></a></div>
<div class="catalogoplataformasxbox"><a href="PLATAFORMAS/XBOX/catalogoxbox.php"><img class="iconxboxsmall"src="imgs/xboxicon.png"></a></div>
<div class="catalogoplataformasps5"><a href="PLATAFORMAS/PS5/catalogops5.php"><img class="iconps5small"src="imgs/ps5icon.png"></a></div>

 
<footer class="rodapepag"> <p> Loja Virtual TrueGaming<sup>&reg;</sup> </p>
Todos Os Direitos Reservados. 
</footer>
<?php 

?>

<script src="js.js"> </script>
</body>
</html>
