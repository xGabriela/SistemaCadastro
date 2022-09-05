<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$erro = FALSE;


if(empty($nome)OR strstr($nome, ' '))
{echo "Digite o nome corretamente. <br>";         $erro=true;}

if(empty($idade))
{echo "Digite o idade corretamente. <br>";  $erro=true;}

if(strlen($sexo)!=1)
{echo "Digite o sexo corretamente. <br>";  $erro=true;}

if(!$erro)

if($idade <25 and $sexo == "f"){
    echo "<h2><br>Aceito</h2>";
}
else {
    echo "<h2><br>não aceito</h2>";
}

echo "<h3>Confira seus dados: <br></h3>";
echo "<br> Nome: ". $nome.
    "<br> Sexo: ". $sexo.
    "<br> Idade: ". $idade;

    


?>