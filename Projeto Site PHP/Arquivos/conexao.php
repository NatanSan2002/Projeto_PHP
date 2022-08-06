<?php 

$hostname = "localhost"; $usuario = "root"; $senha = ""; $bancodedados ="trabalho";

$mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

if ($mysqli->connect_errno){echo "Erro Com Conexão Banco De Dados";};


?>