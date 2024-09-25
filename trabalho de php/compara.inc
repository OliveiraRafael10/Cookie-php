<?php
  if (ISSET($_COOKIE["idiomapg"]))
    {
        $idioma = $_COOKIE["idiomapg"];
        $arquivo = fopen("versao.txt", "w");
        if ($idioma == "brazil") {
          $valor = "EMPRESA <br>
                    A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o <br>
                    mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil.";
          fwrite($arquivo, $valor);
        }
        if ($idioma == "eua") {
          $valor = "OUR PLANT <br>
                    The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded on 1970, and became <br>
                    the most important and traditional supplyer of BAGGING MACHINES in Brazil";
          fwrite($arquivo, $valor);
        }
        if ($idioma == "spain") {
          $valor = "EMPRESA <br>
                    La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y sé a convertido <br>
                    en la más importante y tradicional fabrica de MÁQUINAS ENSACADORAS em <br>
                    Brasil.";
          fwrite($arquivo, $valor);
        }
        fclose($arquivo);
    }
?>