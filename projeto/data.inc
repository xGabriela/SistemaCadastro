<!DOCTYPE html>
<html lang="pt-br">
  <head>


<?php
date_default_timezone_set("UTC");
$meses = array ("Janeiro", "Fevereiro",
"Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outu
bro","Novembro","Dezembro");
$dia = date("d",time());
$mes = date("m",time());
$ano = date("y",time());
echo $dia . " de " . $meses[$mes-1] . " de " . $ano


?>

 </body>
</html>