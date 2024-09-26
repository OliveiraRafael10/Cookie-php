<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $arquivo = file_get_contents("versao.txt", "r");
        echo "<div class = 'conteudo'>{$arquivo} <br><br><br>
        
        <a  class='botao' href='index.php?id=novo-idioma'>Escolher outro idioma</a>

        </div>";
       

    ?>
</body>
</html>