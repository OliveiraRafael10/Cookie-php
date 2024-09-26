<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Design em foco</title>

    <?php
        $opcao = isset($_GET["id"]) ? $_GET["id"] : '';
        
        if($opcao == "novo-idioma"){
            Setcookie("idiomapg");
        }
        elseif (ISSET($_COOKIE["idiomapg"]))
        {
            include "compara.inc";
            header ("Location:empresa.php");
        }
    ?>

</head>
<body>
    <h1>Bem vindo ao site Web Design em Foco</h1>
    <div class="conteudo">
        <p>Escolha o idioma para entrar</p>
        <a class="btn-idioma"  href="idioma.php?id=eua"><img src="img/euaa-icon.png" alt="EUA"></a> &nbsp;&nbsp;&nbsp;
        <a class="btn-idioma" href="idioma.php?id=brazil"><img src="img/brazil-icon.png"alt= "BRAZIL"></a> &nbsp;&nbsp;&nbsp;
        <a class="btn-idioma" href="idioma.php?id=spain"><img src="img/spain-icon.png" alt="SPAIN"></a> 
    </div>
</body>
</html>