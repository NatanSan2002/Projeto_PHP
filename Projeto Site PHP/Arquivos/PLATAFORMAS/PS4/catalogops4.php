<?php
include ("../../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
  <title>PS4</title>
  
  <link rel="stylesheet" href="../../stylegeral2.css">
  <link rel="stylesheet" href="../../style_games.css">

  <style>
  .divimgplataforma{background-image: url("../../imgs/gowwalp.jpg"); background-color: #cccccc;width:100%; height:450px;   }
@media only screen and (max-width: 557px) {
.txtimgplataforma{left:10px; font-size: 63px;}
}
 
  </style>
  


</head>

<body>

<div id="superior"> 
     <img id="logo"src="../../imgs/logomark.png" alt="logo"> <a href="../../paglogin.php"><input class="buttonlogin"type="button" value="Login"></a><a href="../../pagregistrar.php"><input class="buttonregister"type="button" value="Registrar"></a>
     <div id="dentrodiv"> <form action="../SEARCH/search.php" method="GET">  <input type="image"  src="../../imgs/lupa.png"  class="lupa" alt="submit"><input name="searchgame" type="text" class="pesquisabar" id="search"><a href="../../index.php"> <span id="cabecalhoinicial"> Inicial </span> </a>
     <a href="../../index.php"><span id="cabecalho">  Plataformas &#9660; <span> </a>
     <a href="../LANCAMENTOS/paglancamentos.php"> <span id="cabecalho2"> Lançamentos <span> </a><a href="../PROMOCOES/pagpromocoes.php"> <span id="cabecalho3"> Promoçoes <span> </a>
     <a href="../../pagsuporte.php"> <span id="cabecalho4"> Suporte <span> </a></form>
    </div> 

    <div class="divimgplataforma">  <div class="txtimgplataforma">PS4 GAMES</div> </div>
</div>
                             

                                    
  <div id="principaldiv">

  <?php 
 
 $sqlcode = "SELECT * FROM jogos where Plataforma = 'PS4'  ";
$sql_query = $mysqli->query($sqlcode) or die ("ERRO Codigo Banco De Dados ". $mysqli->error );
$i = 0;
while($dados = $sql_query->fetch_assoc()){
 ?>



    
    <div class="div_game">

     


      
          
          <a href="../../detalhes/<?php echo $dados['ID']; ?>.php"> <img src="../../jogos/<?php echo $dados['ID'];  ?>.jpg" class="img"> </a>

          
          <div class="info_game">
            
            <h2><a href="../../detalhes/<?php echo $dados['ID']; ?>.php"><?php echo $dados['NOME']; ?></a> </h2>

      

            
            <strong class="produtos-preco">
              Plataforma: <?PHP echo $dados['PLATAFORMA'];?><br>
              Genero: <?PHP echo $dados['GENERO'];?><br>
              Ano De Lançamento: <?PHP echo $dados['ANO'];?>
              <br><br><br><br><br>
              R$:<?PHP echo $dados['PRECO'];?>,00
            </strong>
           
              </div>
          
        </a>
</div>
        

        <?php ++$i;}; while($dados = $sql_query->fetch_assoc() AND $i<=30 )
        {?>
          
      <div class="divgame">

        
          
           <img src="../../jogos/<?php echo $dados['ID'];  ?>.jpg" class="img">

          
          <div class="info_game">
            
            <h2><a href="../../detalhes/<?php echo $dados['ID']; ?>.php"><?php echo $dados['NOME']; ?></a> </h2>

      

            
            <strong class="produtos-preco">
              Plataforma: <?PHP echo $dados['PLATAFORMA'];?><br>
              Genero: <?PHP echo $dados['GENERO'];?><br>
              Ano De Lançamento: <?PHP echo $dados['ANO'];?>
              <br><br><br><br><br>
              R$:<?PHP echo $dados['PRECO'];?>,00
            </strong>
           
        </div>
          
        </div>
        </div>
        
<?php }?>


        
        

  

</body>

</html>