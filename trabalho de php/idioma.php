<?php
$idioma = $_GET["id"]; //recebe o idioma escolhido pelo usuário
setcookie("idiomapg", "$idioma", time()+259200); //cria um cookie
header ("Location:index.php"); //recarrega a página principal.php
?>