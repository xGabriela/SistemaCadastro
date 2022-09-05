<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$erro = FALSE;


if(empty($nome)OR strstr($nome, ' '))
{echo "Digite o nome corretamente. <br>";         $erro=true;}

if(empty($idade))
{echo "Digite o idade corretamente. <br>";  $erro=true;}

if(!$erro)

switch ($idade) {
    case (5 <= $idade) and $idade <= 10:
        echo "<br>Infantil";
        break;
    case (11 <= $idade and $idade <= 15):
        echo "<br>Juvenil";
        break;
    case (16 <= $idade  and $idade <= 20):
        echo "<br>Junior";
        break;
    case (21 <= $idade and $idade <= 25):
        echo "<br>Infantil";
        break;
    case (26 <= $idade ):
        echo "<h2><br>Velho demais pra jogar.</h2>";
        break;   
    default:
        echo "<br>opcao invalida";
        break;
}


echo "<h3>Confira seus dados: <br></h3>";


    


?>