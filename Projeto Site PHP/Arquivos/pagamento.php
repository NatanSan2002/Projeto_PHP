<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <style> 
    body{background:gray; font-family:Arial,helvetica,sans-serif;}
    .title{background:black;color:white; text-align:center;}
    div#divprincipal{background: white;max-width: 900px;margin-left: auto;margin-right: auto;padding: 30px;
        padding-bottom: 93px;padding-top: 9px;}.input{width: 246px;height: 21px;margin-bottom: 24px;}
        footer#footer{background:white; margin-top:10px; text-align:center; padding:20px;}
        .botao{width: 100px;height: 63px;border-radius: 50%;font-size: 19px;color: white;background: black;display: block;margin-top: 30px;
margin-left: auto;}
   </style>

</head>


<body>

    <form action="pagamento2.php" method="post"> 
        <div id="divprincipal">
            <div class="title"> <h1 class="titleh1">Dados do Comprador</h1> </div>
<div id="nomediv"><p>Nome: </p><input class="input" id="NOMEinput" type="text" name="firtsn"> </div>
<div id="sobrendiv"><p> Sobrenome:</p> <input class="input" id="SNOMEINPUT" type="text" name="sn"> </div>   
    <div id="ENDdiv"> <p>Endereço:</p> <input class="input" type="text" id="ENDinput" name="end"></div> 
        <div id="teldiv"> <p>Telefone:</p> <input class="input" type="number" id="TELinput" name="tel"> </div> 
             
        <div class="title"><h1 class="titleh1">Dados do Cartão</h1></div>
        <div id="NUMCARDdiv"> <p>Numero Do Cartão:</p> <input class="input" type="number" id="NUMCARDinput" name="numcd"></div> 
                 <div id="NOMECARDdiv"> <p>Nome Titular:</p> <input class="input" type="text" id="NOMECARDinput" name="ncd"></div> 
         <div id="CODEdiv"> <p>Codigo de Segurança:</p> <input class="input" type="number" id="CODEinput" name="codback"></div> 
        <div id="bandeiradiv" name="flag"> 
            Selecione a Bandeira :<select>
                                <option value="SP">  Visa </option>
                  <option value="RJ">  MasterCard </option>
                  <option value="MG">  Hipercard </option>
                  <option value="RS">  Maestro </option>
                            </select>
                 <input onclick="confirm()" type="submit" value="Confirmar" class="botao"> 
                 </form>
</div>
    </div>
<footer id="footer"> <p>True Gaming Direitos Reservados® </p></footer>

<script> 
function confirm() {
var nome = document.getElementById("NOMEinput").value;
var Snome = document.getElementById("SNOMEINPUT").value;
var nascimento = document.getElementById("ENDinput").value;
var tel = document.getElementById("TELinput").value;
var NUMcard = document.getElementById("NUMCARDinput").value;
var NOMEcard = document.getElementById("NOMECARDinput").value;
var key = document.getElementById("CODEinput").value;
var confirm;
var dados = [nome,Snome,nascimento,tel,NUMcard,NOMEcard,key];
for(i=0;i<dados.length;++i){ 
if(dados[i] == ""){
confirm = false;
}} 
if(confirm == false){window.alert("Algum dos Campos está vazio"); event.preventDefault ()}
}

</script>
</body>
</html>