<?php
$numero = $_POST['numero'];
$erro = FALSE;

if(strstr($numero, ' '))
{echo "Digite o numero corretamente. <br>";         $erro=true;}

if(!$erro)

$cont = 0;
echo "<h3>Segue a tabuada: <br></h3>";

while($cont < 11){
    echo $numero . " x ".$cont. " = " . $cont*$numero . "<br>";
    $cont++;
}


    


?>